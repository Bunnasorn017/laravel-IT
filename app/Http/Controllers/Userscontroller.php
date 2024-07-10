<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Userscontroller extends Controller
{
    public function showdata()
    {
        $users = User::all();
        return redirect()->route('about', compact('users'));
    }

    public function index(Request $request)
    {
        // // return $request->method();
        // // return $request->path();
        // // return $request->url();
        // // http://127.0.0.1:8000/user-2
        // return $request->fullUrl();
    }

    public function User()
    {
        // $users = array(
        //     "name" => "Bunnasorn",
        //     "email" => "650112418017@bru.ac.th",
        //     "phone" => "0996134898",
        // );
        // return view('user' ,compact('users'));
    }

    public function login()
    {

        return view('login');
    }

    public function loginsubmit(Request $request)
    {
        
        
        $email =  $request->input('email');
        $password =  $request->input('password');

        return 'Email : ' . $email . ' Password : ' . $password;
    }
}