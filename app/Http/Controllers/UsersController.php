<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function show($username)
    {
        $user = User::findByUsername($username);
        return view('users.show', ['user' => $user]);
    }
}
