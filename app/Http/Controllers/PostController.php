<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id)
    {
        $post = Post::find($id);
        $next = $id + 1;
        $prev = $id - 1;
        if ($prev <= 0) {
            $prev = 1;
        }
        if($next > 10){
            $next = 10;
        }
        return
            'URL by: <br />'.
            'url(\'/posts/{$post->id}\'): ' . url("/posts/{$post->id}") . '<br />' .
            'url()->current() ' . url()->current() . '<br />' .
            'url()->full() ' . url()->full() . '<br />' .
            'url()->previous() ' . url()->previous() . '<br />' .
            '<br />Content: <br />' .
            $post->content .
            '<br /><a href=' . url("/posts/{$prev}") . '><-Previous</a>&nbsp' .
            '<a href=' . url("/posts/{$next}") . '>Next-></a>&nbsp' .
            '<a href="/">Home</a>';
    }

    public function home()
    {
        return view('home', ['posts' => Post::all()]);
    }
}
