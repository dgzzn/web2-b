@extends('layouts.base')

@section('title')
    {{$post->titulo}}
@endsection

@section('content')
    <main role="main" class="container"  style="margin-top: 5px">

        <div class="row">

            <div class="col-sm-8 blog-main">
                <div class="blog-post">
                    <h2 class="blog-post-title">{{ $post->titulo }}</h2>
                    <p class="blog-post-meta"><small><i>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }} por <a href="#">{{ $post->name }}</a></i></small></p>

                    <p>{!!  $post->conteudo !!}</p>
                </div><!-- /.blog-post -->
            </div><!-- /.blog-main -->

            <aside class="col-sm-3 ml-sm-auto blog-sidebar">
                <div class="sidebar-module">
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->
@endsection