<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email',
            'nim' => 'required|size:13',
        ]);

        if($validatedData['email'] != 'bma@ciputra.ac.id'){
            if (!str_ends_with($validatedData['email'], '@student.ciputra.ac.id')) {
                return redirect()->back()->withErrors(['email' => 'Invalid email format. Please use an email ending with @student.ciputra.ac.id']);
            }
            $existingEmail = User::where('email', $validatedData['email'])->first();
            $existingNIM = User::where('nim', $validatedData['nim'])->first();

            if(!$existingEmail){
                if(!$existingNIM){
                    if(strlen($validatedData['nim']) === 13){
                        $allowedPrefixes = ['010601', '010602', '010604', '020603', '020604', '020606', '030601', '040601', '040602', '040604', '050601', '050602', '060601', '060602','070601', '070602'];
                        $startsWithAllowedPrefix = false;
    
                        foreach ($allowedPrefixes as $prefix) {
                            if (str_starts_with($validatedData['nim'], $prefix)) {
                                $startsWithAllowedPrefix = true;
                                break;
                            }
                        }
    
                        if($startsWithAllowedPrefix){
                            $user = User::create([
                                'email' => $validatedData['email'],
                                'nim' => $validatedData['nim'],
                                'role' => 2,
                            ]);
                            
                            Auth::login($user);
                            return redirect()->route('main');
                        } else {
                            return redirect()->back()->withErrors(['nim' => 'Invalid NIM format.']);
                        }
                    } else {
                        return redirect()->back()->withErrors(['nim' => 'Invalid NIM format.']);
                    }
                } else {
                    return redirect()->back()->withErrors(['nim' => 'NIM has already been used to vote.']);
                }
            } else {
                return redirect()->back()->withErrors(['email' => 'Email has already been used to vote.']);
            }
        } else {
            $user = User::where('email', 'bma@ciputra.ac.id')->first();

            Auth::login($user);
            return redirect()->route('stats');
        }
    }
}
