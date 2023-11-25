<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(LoginRequest $request)
    {
        $email = $request->input('email');
        $password = $request->input('password');

        Auth::attempt([]);

        return 'aaa';
    }
}
