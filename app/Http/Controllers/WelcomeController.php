<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function info($name, $age = '')
    {
        return "Welcome to Laravel - $name - $age";
    }
}

