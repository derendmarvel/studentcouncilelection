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
            'email' => 'required',
            'nim' => 'required',
        ]);

        // if ($request->fails()) {
        //     return redirect()->back()->withErrors(['email' => 'The email is already registered.']);
        // }

        if($validatedData['email'] != 'bma@ciputra.ac.id'){
            $user = User::create([
                'email' => $validatedData['email'],
                'nim' => $validatedData['nim'],
                'role' => 2,
            ]);

            Auth::login($user);
            return redirect()->route('main');
        }else{
            $user = User::where('email', 'bma@ciputra.ac.id')->first();

            Auth::login($user);
            return redirect()->route('stats');
        }
    }
}
