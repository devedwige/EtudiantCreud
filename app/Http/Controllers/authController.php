<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use App\Models\User;

class authController extends Controller
{
    public function index(){
        return view('register');
    }
    public function connexion(){
        return view('login');
    }
// Analyser les données et laisser passer en base de données

    public function store(Request $request){
        $user = $request->validate([
            "firstname" => 'required|string',
            "lastname" => 'required|string',
            "date" => 'required|date',
            "phone" => 'required|integer',
            "email" => 'required|email',
            "password" => 'required|string'

        ]);

        User::create([
            'firstname'=> $request->firstname,
            'lastname'=> $request->lastname,
            'date'=> $request->date,
            'phone'=> $request->phone,
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
        ]);
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('etudiant');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    // pour se deconnecter
    public function logout(Request $request)
{
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    return view('/login');
}

}
