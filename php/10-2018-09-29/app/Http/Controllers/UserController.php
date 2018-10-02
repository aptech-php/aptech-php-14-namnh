<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    //
    function layTatCaNguoiDung()
    {
        $tatCaNguoiDung = User::all();
        return $tatCaNguoiDung;
    }

    function layMotNguoiDung($id)
    {
        $layMotNguoiDung = User::find($id);
        return view('view-user', ['nguoi_dung' => $layMotNguoiDung]);
    }

    function xoaNguoiDung($id)
    {
        return 'abc';
    }
}
