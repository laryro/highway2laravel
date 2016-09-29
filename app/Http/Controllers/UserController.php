<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {

        $users = ['Laryssa', 'Raphael', 'Tatiane'];

        return view('user.index', compact('users'));
    }

    public function show($userId, $userName = 'N/A')
    {
        return view('user.user', compact('userId', 'userName'));
        
    }
}
