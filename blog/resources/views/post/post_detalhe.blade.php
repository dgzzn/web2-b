@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{route('home')}}">Posts <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                {{--<ul class="nav nav-pills flex-column">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">Nav item again</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            </nav>

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>{{ $post->titulo }}</h1>

                <a href="{{ route('post.edit', ['id' => $post->id]) }}" class="btn btn-primary btn-sm">
                    Editar Post
                </a>
                <a id="delete" onclick="return confirm('Confirmar exclusão?')" href="{{ route('post.delete', ['id' => $post->id]) }}" class="btn btn-danger btn-sm">
                    Excluir Post
                </a><br><br>
                <div class="col-sm-8 blog-main">
                    <p>{!! $post->conteudo !!}</p>
                </div>

            </main>
        </div>
    </div>
@endsection
