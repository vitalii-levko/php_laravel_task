@extends('welcome')
@section('title')
New Post | Bulletin Board
@endsection
@section('content')
<h1>New Post</h1>
<form method="POST" action="/create">
    @csrf
    <input type="text" name="title" placeholder="Title" value="{{ old('title') }}"></br>
    @error('title')
        {{ $errors->first('title') }}</br>
    @enderror
    <textarea name="body" placeholder="Body">{{ old('body') }}</textarea></br>
    @error('body')
        {{ $errors->first('body') }}</br>
    @enderror
    <button type="submit">Submit</button></br>
</form>
@endsection
