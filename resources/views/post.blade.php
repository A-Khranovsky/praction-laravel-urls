@extends('layout')
@section('content')
    <p>Content:</p>
    {{$post->content}}
    <br /><a href='{{url("/post/{$prev}")}}'><-Previous</a>&nbsp&nbsp
    <a href="{{\Illuminate\Support\Facades\URL::temporarySignedRoute(
            'tmp', now()->addMinutes(1), ['id' => $post])}}">This by signed temporary link</a>&nbsp&nbsp
    <a href='{{url("/post/{$next}")}}'>Next-></a>&nbsp&nbsp
    <a href="/">Home</a>&nbsp&nbsp
    <a href="{{url("$post->id/post_reversed")}}">This by post_reversed route</a>
@endsection
