<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Posts</title>
    <meta charset="utf-8">
</head>
<body>
    <p><strong>Posts</strong></p>
    @foreach($posts as $post)
        <a href="{{url("/posts/{$post->id}")}}">{{$post->title}}</a><br />
    @endforeach
</body>
</html>
