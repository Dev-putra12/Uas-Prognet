<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
{
    $validatedData = $request->validate([
        'username' => 'required|$username',
        'password' => 'required|$password',
    ]);

    if (Auth::attempt($validatedData)) {
        // Authentication passed...
        return redirect()->intended('home');
    } else {
        return redirect()->back()->withInput()->withErrors(['$username' => 'Email or password are incorrect']);
    }
}

public function logout()
{
    Auth::logout();
    return redirect('login');
}


}
