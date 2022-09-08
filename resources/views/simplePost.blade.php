<!DOCTYPE html>
<html lang="ru">
<head>
    <title>{{$post->title}}</title>
    <meta charset="utf-8">
</head>
<body>
<p>This post opened by temporary signed link. If you will try open it through 1 minute, it won't be opened.</p>
<h3>{{$post->title}}</h3>
<div>{{$post->content}}</div>
<a href="{{route('home')}}">Home</a>
</body>
</html>
