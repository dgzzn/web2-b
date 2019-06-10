<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function index() {
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.autor')->orderBy('posts.created_at', 'DESC')->paginate(3);
        $archives = DB::table('posts')->orderBy('id', 'DESC')->get();

        $data = array(
            'posts' => $posts,
            'archives' => $archives
        );
        return view('post/index', $data);

    }

    public function getFullPost($post_id) {
        $post = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.autor')->where('posts.id', '=', $post_id)->first();
        return view('post/full_post', ['post' => $post]);
    }
}
