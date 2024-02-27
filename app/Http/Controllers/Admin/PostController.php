<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $categories = Category::orderBy('created_at', 'DESC')->get();

        return view('admin.post.create', [
            'categories' => $categories
        ]);
    }

    public function store(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->text = $request->text;
        $post->cat_id = $request->cat_id;
        $post->img = '/' . $request->img;
        $post->save();

        return redirect()->back()->witSuccess('Статья была успешно добавлена');
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        //
    }

    public function update(Request $request, Post $post)
    {
        //
    }

    public function destroy(Post $post)
    {
        //
    }
}
