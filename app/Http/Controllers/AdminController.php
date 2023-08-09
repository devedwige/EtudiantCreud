<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

use App\Models\admin;

class AdminController extends Controller
{
    public function register(){
        $users = admin::all();
        return view('admin.register',compact('users'));

    }
    // pour recuperer celui qui a id=3
        // $users = admin::where("id",3)->get();


    public function login(){
        return view('admin.login');
    }

    public function enregistrer(Request $request){
        $input =$request->validate([
            'name'=>'required|string',
            'lastname'=>'required|string',
            'age'=>'required|integer',
            'email'=>'required|string',
            'password'=>'required|string',
        ]);
            admin::create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'age' => $request->age,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
       
            // admin::create ($input);
            return 'ok';
    }
}


