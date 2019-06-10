@extends('layouts.base')

@section('content')
    <div class="container-fluid">
        <div class="row">
            {{--<nav class="col-sm-3 col-md-2 d-none d-sm-block bg-light sidebar">--}}
                {{--<ul class="nav nav-pills flex-column">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link active" href="#">Post <span class="sr-only">(current)</span></a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
                {{--<ul class="nav nav-pills flex-column">--}}
                    {{--<li class="nav-item">--}}
                        {{--<a class="nav-link" href="#">Nav item again</a>--}}
                    {{--</li>--}}
                {{--</ul>--}}
            {{--</nav>--}}

            <main role="main" class="col-sm-9 ml-sm-auto col-md-10 pt-3">
                <h1>Edit Post</h1>
                <div class="col-md-6">
                    <form method="post" action="{{ route('post.update', ['id' => $post->id]) }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" id="id_titulo" name="titulo"
                                   aria-describedby="titulo" value="{{ $post->titulo }}">
                        </div>
                        <div class="form-group">
                            <label for="conteudo">Conteudo</label>
                            <textarea class="form-control" id="id_conteudo" rows="5" name="conteudo">{{ $post->conteudo }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-outline-info">Editar post</button>
                    </form>
                </div>
            </main>
        </div>
    </div>
@endsection
@section('scripts')
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote.js"></script>
    <script>
        $('#id_conteudo').summernote({
            placeholder: 'Hello bootstrap 4',
            tabsize: 2,
            width: 700
        });
    </script>
@endsection