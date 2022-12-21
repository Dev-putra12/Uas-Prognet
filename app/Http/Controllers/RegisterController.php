<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function signup ()
    {
        return view('signup',[
            'title'=>'signup'
        ]);
    }

    public function store (Request $request)
    {
    $validatedData = $request->validate([
        'name' => 'min:3',
        'username' => 'min:3',
        'email' => 'min:3',
        'password' => 'min:8'
    ]);
    // hash cara 1
    // $validatedData['password'] = bcrypt($validatedData['password']);
    // hash password cara 2
    $validatedData['password'] = Hash::make($validatedData['password']);

    User::create($validatedData);
    // $request->session()->flash('success', 'Registrasi berhasil silahkan login untuk melanjutkan');

    return redirect('/login')->with('success', 'Registrasi berhasil silahkan login untuk melanjutkan');
    }
}
