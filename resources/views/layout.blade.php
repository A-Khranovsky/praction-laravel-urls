<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
    URL by: <br />
    <ul>
    <li><strong>url('/posts/{$post->id}')</strong>  {{url("/posts/{$post->id}")}}</li>
    <li><strong>url()->current()</strong>  {{url()->current()}}</li>
    <li><strong>url()->full()</strong>  {{url()->full()}} </li>
    <li><strong>url()->previous()</strong>  {{url()->previous()}}</li>
    <li><strong>route('home', ['post' => $post])</strong>  {{route('home', ['post' => $post])}}</li>
    </ul>
    @yield('content')
</body>
</html>
