<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClientController extends Controller
{
    public function create(Request $request)
    {
    	return view('client');
    }

    public function store(Request $request)
    {
    	return $request->get('retorno');
    }
}
