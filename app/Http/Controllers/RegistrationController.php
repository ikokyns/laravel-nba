<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
    	return view('registration');
    }

    public function register()
    {
    	$this->validate(request(), [
    		'name' => 'required',
    		'email' => 'required|unique:users,email',
    		'password' => 'required|min:5|confirmed'
    	]);

    	$user = new \App\User;
    	$user->name = request('name');
    	$user->email = request('email');
    	$user->password = bcrypt(request('password'));	
    	$user->save();

    	return redirect('/');
    }
}
