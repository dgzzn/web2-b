@extends('layouts.base')

@section('title')
Página inicial
@endsection

@section('content')

    <main role="main" class="container"  style="margin-top: 5px">

        <div class="row">

            <div class="col-sm-8 blog-main">

                @foreach($posts as $post)
                    <div class="blog-post">
                        <h2 class="blog-post-title">{{ $post->titulo }}</h2>
                        <p class="blog-post-meta"><small><i>Postado em {{ Carbon\Carbon::parse($post->created_at)->format('d/m/Y')  }} por <a href="#">{{ $post->name }}</a></i></small></p>

                        <p>{!! \Illuminate\Support\Str::words($post->conteudo, 30, '...') !!}</p>
                        <blockquote>
                            <p>
                                <a href="{{ route('post.read', ['post_id' => $post->id]) }}" class="btn btn-primary btn-sm">Continuar lendo</a> </p>
                        </blockquote>
                    </div><!-- /.blog-post -->
                @endforeach

                <nav class="blog-pagination">
                    {{ $posts->links() }}
                </nav>

            </div><!-- /.blog-main -->

            <aside class="col-sm-3 ml-sm-auto blog-sidebar">
                <div class="sidebar-module">
                    <h4>Últimos Posts</h4>
                    @foreach($archives as $archive)
                        <ol class="list-unstyled">
                            <li><a href="{{ route('post.read', ['post_id' => $archive->id]) }}">{!! \Illuminate\Support\Str::words($archive->titulo, 6, '...') !!}</a></li>
                        </ol>
                    @endforeach
                </div>
                <div class="sidebar-module">
                    <h4>Outros links</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">GitHub</a></li>
                        <li><a href="#">Twitter</a></li>
                        <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->
@endsection