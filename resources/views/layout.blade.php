<!DOCTYPE html>
<html lang="ru">
<head>
    <title></title>
    <meta charset="utf-8">
</head>
<body>
<p>URL by:</p>
    <ul>
    <li><strong>url('/post/{$post->id}')</strong>  {{url("/post/{$post->id}")}}</li>
    <li><strong>url()->current()</strong>  {{url()->current()}}</li>
    <li><strong>url()->full()</strong>  {{url()->full()}} </li>
    <li><strong>url()->previous()</strong>  {{url()->previous()}}</li>
    <li><strong>route('tmp', ['post' => $post])</strong>  {{route('tmp', ['post' => $post])}}</li>
    <li><strong>URL::signedRoute('tmp', ['id' => $post])</strong><br />
            {{\Illuminate\Support\Facades\URL::signedRoute('tmp', ['id' => $post])}}</li>
    <li><strong>URL::temporarySignedRoute('tmp', now()->addMinutes(1), ['id' => $post])</strong><br />
            {{\Illuminate\Support\Facades\URL::temporarySignedRoute(
            'tmp', now()->addMinutes(1), ['id' => $post])}}
    </li>
    <li><strong>action([\App\Http\Controllers\PostController::class, 'index'], ['id' => $post->id])</strong><br />
        {{action([\App\Http\Controllers\PostController::class, 'index'], ['id' => $post->id])}}
    </li>
    </ul>
    @yield('content')
</body>
</html>
