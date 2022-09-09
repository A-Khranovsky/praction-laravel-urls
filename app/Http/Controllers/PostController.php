<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index($id)
    {
        $next = $id + 1;
        $prev = $id - 1;
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
            'post' => Post::find($id),
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
        return view('simplePost', ['post' => Post::find($request->id)]);
    }
}
