<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($post)
    {
        $next = $post + 1;
        $prev = $post - 1;
        if ($prev <= 0) {
            $prev = 1;
        }
        if ($next > 10) {
            $next = 10;
        }
        if (isset($_GET['edit'])) {
            return view('edit', [
                'post' => Post::find($_GET['edit'])]);
        }
        return view('post', [
            'post' => Post::find($post),
            'next' => $next,
            'prev' => $prev
        ]);

    }

    public function home()
    {
        return view('home', ['posts' => Post::all()]);
    }

    public function temporaryLink(Request $request)
    {
        return view('simplePost', ['post' => Post::find($request->post)]);
    }
}
