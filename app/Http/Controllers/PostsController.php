<?php

namespace App\Http\Controllers;

use App\Post;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    
	public function index()
	{

		$posts =Post::all();
		return view('posts.index')->with(['posts'=>$posts]);

	}


	public function show($postId)
	{

		$post =Post::find($postId);

		if(is_null($post)){
			abort(404);
		}

		return view('posts.show')->with(['post'=>$post]);

	}


	public function create()
	{

		return view('posts.show');

	}

}
