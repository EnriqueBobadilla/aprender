<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class AuthenticatedSessionController extends Controller
{
    public function store(Request $request)
    {
        
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);

       if(! Auth::attempt($credentials, $request->boolean('remember')))
       {
            throw ValidationValidationException::withMessages([
                'email' => __('auth.failed')
            ]);
       }

       $request->session()->regenerate();

       return redirect()->intended()
        ->with('status', 'Estas dentro we');

    }
}
