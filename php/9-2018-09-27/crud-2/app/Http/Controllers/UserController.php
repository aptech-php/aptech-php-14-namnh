<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    function index()
    {
        $users = User::all();
        return view('welcome', ['users' => $users]);
    }

    function show($email)
    {
        $user = User::where('email', 'like', "%$email%")->get();
        return $user;
    }

    // function show2()
    // {
    //     $user = User::find(2);
    //     return $user;
    // }
}
