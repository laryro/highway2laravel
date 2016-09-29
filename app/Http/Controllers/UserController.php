<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();

        return view('user.index', compact('users'));
    }


    public function create()
    {
        return view('user.create');
        
    }

    public function post(Request $request)
    {
        $fields = $request->except(['_token']);
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required', 'confirmed', 'min:4']
        ]);

        User::create($fields);

        \Session::flash('flash_message','successfully saved.');


        return redirect()->route('user.list');
    }
}
