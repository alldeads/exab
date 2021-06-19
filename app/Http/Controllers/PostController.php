<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request)
    {
    	$posts = [
    		0 => [
    			'id' => 1,
    			'title' => 'Lion Tiger',
    			'description' => 'The cage was sitting by the side of the road for people can see a wicked tiger who has already killed a lot of innocent village people, including many cattle, hens by suddenly attacking in the village.',
    			'created_at' => now()
    		]
    	];

    	return response()->json([
    		'posts'   => $posts,
    		'message' => "Successfully retrieved posts."
    	], 200);
    }
}
