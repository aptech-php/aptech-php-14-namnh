<?php

namespace App\Http\Controllers;
use App\User;//thêm dòng này
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        return view('users.index',['abc'=>$users]);//view --$users la t
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('users.create');

    }
    public function login()
    {
        //
        return view('users.login');

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return redirect()->route('users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $users = User::find($id);
        return view('users.show',['abc'=>$users]);//view --$users la t

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $users = User::find($id);
        return view('users.edit',['abc'=>$users]);//view --$users la t
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        return redirect()->route('users.index');
      //  return redirect()->route('users.show',['abc'=>$users]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
       
        
        
         $users = User::find($id);
         $users->delete();
         return redirect()->route('users.index');
        //return view('users.show',['abc'=>$users]);//view --$users la t
    }
    public function run()
    {
        
      $users =User::all();//model lay model roi model tra ve
     //$users =User::find($id);//model lay model roi model tra ve
    //return view('user',['abc'=>$users]);//view --$users la ten.tra ve cho ong view
     return view('user',['abc'=>$users]);//view --$users la t
    //return "He;ldssx";
   // return $users;
}
}
