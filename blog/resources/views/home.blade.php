@extends('layouts.base')


@section('content')
    <div class="container-fluid">
        <div class="row mt-5">
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
                <h1>Posts
                    <a href="{{ route('post.form') }}" class="btn btn-primary btn-sm">
                        Novo Post
                    </a>
                </h1>
                @if(Session::has('success'))
                    <div class="row">
                        <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                            <div id="message" class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                        </div>
                    </div>
                @endif
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Título</th>
                        <th>Autor</th>
                        <th>Detalhes</th>
                        <th>Data de publicação</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($posts)
                        @foreach($posts as $post)
                            <tr>
                                <th>{{ $loop->iteration }}</th>
                                <td>{{ $post->titulo }}</td>
                                <td>{{ $post->name }}</td>
                                <td>
                                    <a href="{{ route('post.detalhe', ['id' => $post->id]) }}">Ver mais</a>
                                </td>
                                <td>{{ Carbon\Carbon::parse($post->created_at)->format('d-m-Y')  }}</td>
                            </tr>
                        @endforeach
                    @else
                        <p class="text-center text-primary">No Posts created Yet!</p>
                    @endif
                </table><Br>
            </main>
        </div>
    </div>
@endsection