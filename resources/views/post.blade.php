@extends('layout')
@section('content')
    <p>Content:</p>
    {{$post->content}}
    <br /><a href='{{url("/posts/{$prev}")}}'><-Previous</a>&nbsp&nbsp
    <a href="{{\Illuminate\Support\Facades\URL::temporarySignedRoute(
            'tmp', now()->addMinutes(1), ['post' => $post])}}">This by signed temporary link</a>&nbsp&nbsp
    <a href='{{url("/posts/{$next}")}}'>Next-></a>&nbsp&nbsp
    <a href="/">Home</a>
@endsection
