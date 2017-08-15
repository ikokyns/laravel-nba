<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest', ['except' => 'logout']);
	}

    public function index()
    {
    	return view('login');
    }

    public function login()
    {
    	$this->validate(request(), [
    		'email' => 'required',
    		'password' => 'required'
    	]);

    	if (!auth()->attempt(request(['email', 'password']))) {
    		return back()->withErrors([
    			'message' => 'Bad credentials. Please try again.'
    		]);
    	}

        if (auth()->user()->activated == false) {
            $user_id = auth()->user()->id;
            
            return view('activate-user', compact('user_id'));
        }

    	return redirect('/');
    }

    public function logout()
    {
    	auth()->logout();

    	return redirect('/login');
    }
}
