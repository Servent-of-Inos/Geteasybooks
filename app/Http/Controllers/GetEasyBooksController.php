<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Email;

class GetEasyBooksController extends Controller
{

    public function index() 
    {

    	return view('index');

    }

    public function store(Request $request) 
    {
		$this->validate($request, [
            'email' => 'required|string|email|max:191'
        ]);


        Email::create($request->all());

    }

}