<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayersController extends Controller
{
    public function show($id)
    {
    	$player = \App\Player::find($id);

    	return view('players.show', compact('player'));
    }
}
