<?php

namespace App\Http\Controllers;

use App\Models\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $users = User::with('phone', 'posts')->get();
        return view('welcome', compact('users'));
    }
}
