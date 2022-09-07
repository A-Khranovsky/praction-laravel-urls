@extends('layout')
@section('content')
    <br />Content: <br />
    {{$post->content}}
    <br /><a href='{{url("/posts/{$prev}")}}'><-Previous</a>
    <a href='{{url("/posts/{$next}")}}'>Next-></a>
    <a href="/">Home</a>
@endsection
