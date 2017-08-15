<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function activate($id) 
    {
    	$this->validate(request(), [
    		'activate' => 'required'
    	]);

    	$activated = (request('activate') == '1') ? true : false;

    	$user = \App\User::find($id);
    	$user->activated = $activated;
    	$user->save();

    	return redirect('/');
    }
}
