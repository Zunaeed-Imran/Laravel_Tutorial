<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Authcontroller extends Controller
{
    public function register(Request $request){
        // validation
        $request->validate([
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'max:255', 'confirmed'],
        ]);
    }
}
