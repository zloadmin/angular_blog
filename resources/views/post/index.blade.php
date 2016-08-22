@extends('app')

@section('content')

    @foreach($posts as $post)

        <div class="col-md-12">

            <h1>{{ $post->title }}</h1>

            <p>{{ str_limit($post->body, 500) }}</p>

            <div class="col-md-12">

                <a href="/post/{{ $post->id }}" class="btn btn-default pull-right">Read</a>
                
            </div>
        </div>

    @endforeach


    <hr>

    {!! $posts->links() !!}

@stop