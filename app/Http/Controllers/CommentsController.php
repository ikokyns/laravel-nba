<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function store($id)
    {
    	$this->validate(request(), [
    		'content' => 'required|min:10'
    	]);

    	$comment = new \App\Comment;
    	$comment->content = request('content');
    	$comment->user_id = auth()->user()->id;

    	$team = \App\Team::find($id);
    	$comment->team_id = $team->id;

    	$comment->save();

    	return back();
    }
}
