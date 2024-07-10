<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class registerController extends Controller
{
    public function register(Request $req) {
        $req->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            'password' => 'required|min:4',
        ]);

        $user = new User;

        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->save();

        return redirect()->route('datafech');
    }
}
