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
        if ($next > 10) {
            $next = 10;
        }
        if (isset($_GET['edit'])) {
            return view('edit', [
                'post' => Post::find($_GET['edit'])]);
        }
        return view('post', [
            'post' => $post,
            'next' => $next,
            'prev' => $prev
        ]);

    }

    public function home(Request $request)
    {
        if(isset($_GET['post'])){
            if (! $request->hasValidSignature()) {
                abort(401);
            }
            return $_GET['expires'];
        }
        return view('home', ['posts' => Post::all()]);
    }
}
