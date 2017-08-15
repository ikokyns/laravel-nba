<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function show($id)
    {
    	$player = \App\Player::find($id);

    	return view('players.show', compact('player'));
    }
}
