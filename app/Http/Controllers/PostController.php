<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	public function index()
	{
		// DB::enableQueryLog();

		$posts = Post::with('user')->get();

		foreach ($posts as $post) {
			$post->user->name;
		}

		// dd(DB::getQueryLog());

		return view('posts', ['posts' => $posts]);
	}
}
