<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    function hienThiTatCaNguoiDung()
    {

        $users = User::all();

        return view('welcome', ['users' => $users]);

    }
}
