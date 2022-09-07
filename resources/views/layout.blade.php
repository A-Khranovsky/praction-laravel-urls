<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
    URL by: <br />
    url('/posts/{$post->id}'): {{url("/posts/{$post->id}")}}<br />
    url()->current(): {{url()->current()}}<br />
    url()->full(): {{url()->full()}} <br />
    url()->previous(): {{url()->previous()}}<br />
    @yield('content')
</body>
</html>
