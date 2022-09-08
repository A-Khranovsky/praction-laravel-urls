<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
<p>URL by:</p>
    <ul>
    <li><strong>url('/posts/{$post->id}')</strong>  {{url("/posts/{$post->id}")}}</li>
    <li><strong>url()->current()</strong>  {{url()->current()}}</li>
    <li><strong>url()->full()</strong>  {{url()->full()}} </li>
    <li><strong>url()->previous()</strong>  {{url()->previous()}}</li>
    <li><strong>route('home', ['post' => $post])</strong>  {{route('home', ['post' => $post])}}</li>
    <li><strong>URL::signedRoute('tmp', ['post' => $post])</strong><br />
            {{\Illuminate\Support\Facades\URL::signedRoute('tmp', ['post' => $post])}}</li>
    <li><strong>URL::temporarySignedRoute('tmp', now()->addMinutes(1), ['post' => $post])</strong><br />
            {{\Illuminate\Support\Facades\URL::temporarySignedRoute(
            'tmp', now()->addMinutes(1), ['post' => $post])}}
    </li>
    <li><strong>action([\App\Http\Controllers\PostController::class, 'index'], ['post' => $post->id])</strong><br />
        {{action([\App\Http\Controllers\PostController::class, 'index'], ['post' => $post->id])}}
    </li>
    </ul>
    @yield('content')
</body>
</html>
