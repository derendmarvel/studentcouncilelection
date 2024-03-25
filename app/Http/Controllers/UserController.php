<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\NimEmailImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'nim' => 'required',
        ]);

        if($validatedData['email'] != 'bma@ciputra.ac.id'){
            if (!str_ends_with($validatedData['email'], '@student.ciputra.ac.id')) {
                return redirect()->back()->withErrors(['email' => 'Invalid email format. Please use an email ending with @student.ciputra.ac.id']);
            }
            $existingEmail = User::where('email', $validatedData['email'])->first();
            $existingNIM = User::where('nim', $validatedData['nim'])->first();

            if(!$existingEmail){
                if(!$existingNIM){
                    $import = new NimEmailImport();
                    $filePath = public_path('images/Data Mahasiswa PEMILU 2024.xlsx');
                    $data = Excel::toArray($import, $filePath)[0];

                    foreach ($data as $row) {
                        if ($row['nis'] == $validatedData['nim'] && $row['official_email'] == $validatedData['email']) {
                            $user = User::create([
                                'email' => $validatedData['email'],
                                'nim' => $validatedData['nim'],
                                'role' => 2,
                            ]);
                                        
                            Auth::login($user);
                            return redirect()->route('main');
                        }
                    }
                    return redirect()->back()->withErrors(['email' => 'Incorrect NIM or email.']);
                } else {
                    return redirect()->back()->withErrors(['nim' => 'NIM has already been used to vote.']);
                }
            } else {
                return redirect()->back()->withErrors(['email' => 'Email has already been used to vote.']);
            }
        } else {
            if ($validatedData['nim'] == '001') {
                $user = User::where('email', 'bma@ciputra.ac.id')->first();
                Auth::login($user);
                return redirect()->route('stats');
            }
            return redirect()->back()->withErrors(['nim' => 'Incorrect NIM.']);
        }
    }
}
