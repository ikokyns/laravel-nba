<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => 'index']);
        $this->middleware('logoutInactive');
    }

    public function index()
    {
    	$teams = \App\Team::all();

    	return view('teams.index', compact('teams'));
    }

    public function show($id) 
    {
    	$team = \App\Team::find($id);

    	return view('teams.show', compact('team'));
    } 
}
