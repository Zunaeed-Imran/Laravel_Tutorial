<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FunctionPractice extends Controller
{
    // Function Practice in laravel
    public function greet ($x) {
        return "Hello Laravel Trainee, $x how are you";
    }
}
