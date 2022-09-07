@extends('layout')
@section('content')
<p><strong>{{$post->title}}</strong></p>
<form action="">
<textarea cols="80" rows="15">{{$post->content}}</textarea>
<br />
<input type="submit" value="  Edit  " />
<a href="{{route('home')}}">Home</a>
</form>
@endsection
