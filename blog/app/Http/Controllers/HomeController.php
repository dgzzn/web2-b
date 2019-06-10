<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.autor')->paginate(10);
        return view('home', ['posts' => $posts]);
    }


    public function getPostForm() {
        return view('post/post_form');
    }

    public function createPost(Request $request){
        $post = Post::create(array(
            'titulo' => Input::get('titulo'),
            'conteudo' => Input::get('conteudo'),
            'autor' => Auth::user()->id
        ));
        return redirect()->route('home')->with('success', 'Postagem criada com sucesso!');
    }

    public function getPost($id){
        $post = Post::find($id);
        return view('post/post_detalhe', ['post' => $post]);
    }

    public function editPost($id) {
        $post = Post::find($id);
        return view('post/editar_post', ['post' => $post]);
    }

    public function updatePost(Request $request, $id) {
        $post = Post::find($id);
        $post->titulo = $request->titulo;
        $post->conteudo = $request->conteudo;
        $post->save();
        return redirect()->route('home')->with('success', 'Postagem editada com sucesso!');
    }

    public function deletePost($id) {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('home')->with('success', 'Postagem excluída com sucesso!');
    }
}
