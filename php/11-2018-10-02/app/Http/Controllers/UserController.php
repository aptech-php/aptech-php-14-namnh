<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = User::all();
        return view('users.index', ['users' => $users]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('users.show', ['user' => $user]);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        // User::destroy($id);

        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit', ['user' => $user]);
    }

    public function update(Request $request, $id)
    {

        //update
        //c1
        $name = $request->name;
        $email = $request->email;

        $user = User::find($id);
        $user->name = $name;
        $user->email = $email;
        $user->save();
        // return view('users.show', ['user' => $user]);

        //c2
        // $user = User::find($id);
        // $user->update([
        //     'name' => $request->name,
        //     'email' => $request->email,
        // ]);
        return redirect()->route('users.show', $user->id);

    }

    public function create()
    {
        return view('users.create');

    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('users.index');
    }
}
