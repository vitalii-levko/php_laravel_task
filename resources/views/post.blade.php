@extends('welcome')
@section('title')
Posts List | Bulletin Board
@endsection
@section('content')
    <h1>Posts List</h1>
    @foreach ($posts as $post)
        <hr>
        <h2>{{ $post->title }}</h2>
        <p>by {{ $post->user->name }}</p>
        <p>posted {{ date('d-m-Y H:m', strtotime($post->created_at)) }}</p>
        <p>{{ $post->body }}</p>
    @endforeach
    {{ $posts->links() }}
@endsection
