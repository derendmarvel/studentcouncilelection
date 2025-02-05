<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Imports\NimEmailImport;
use Exception;
use Laravel\Socialite\Facades\Socialite;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'nim' => 'required',
        ]);

        if($validatedData['email'] != 'sa@ciputra.ac.id'){
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
                $user = User::where('email', 'sa@ciputra.ac.id')->first();
                Auth::login($user);
                return redirect()->route('stats');
            }
            return redirect()->back()->withErrors(['nim' => 'Incorrect NIM.']);
        }
    }

    /**
     * Function: googleLogin
     * This function will redirect to Google
     */

    public function googleLogin() {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Function: googleAuthentication
     * This function will authenticate the user through the Google Account
     */

    public function googleAuthentication() {
        try {
            $googleUser = Socialite::driver('google')->user();

            $user = User::where('google_id', $googleUser->id)->first();

            if($googleUser->email == 'sa@ciputra.ac.id'){
                $user = User::where('email', 'sa@ciputra.ac.id')->first();
                Auth::login($user);
                return redirect()->route('stats');
            }

            if (!str_ends_with($googleUser->email, '@student.ciputra.ac.id')) {
                return redirect()->back()->withErrors(['email' => 'Invalid email format. Please use an email ending with @student.ciputra.ac.id']);
            }

            if ($user) {
                return redirect()->back()->withErrors(['email' => 'Email has already been used to vote.']);
            } else {
                $userData = User::create([
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => Hash::make('Password@1234'),
                    'google_id' => $googleUser->id,
                    'role' => 2,
                ]);
            
                if ($userData) {
                    Auth::login($userData);
                    return redirect()->route('main');
                }
            }
        } catch (Exception $e) {
            dd($e);
        }
    }
}
