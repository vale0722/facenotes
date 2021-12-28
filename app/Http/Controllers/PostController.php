<?php

namespace App\Http\Controllers;

use App\Http\Requests\Posts\FormPostRequest;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PostController extends Controller
{
    public function index(): View
    {
        $posts = Post::paginate(5);

        return view('posts.index', ['posts' => $posts]);
    }

    public function create(): View
    {
        return view('posts.create');
    }

    public function store(FormPostRequest $request): RedirectResponse
    {
        $post = new Post();
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return response()->redirectToRoute('posts.index');
    }

    public function show(Post $post): View
    {
        return view('posts.show', ['post' => $post]);
    }

    public function edit(Post $post): View
    {
        return view('posts.edit', ['post' => $post]);
    }

    public function update(FormPostRequest $request, Post $post): RedirectResponse
    {
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->save();

        return response()->redirectToRoute('posts.index');
    }

    public function destroy(Post $post)
    {
        $post->delete();

        return response()->redirectToRoute('posts.index');
    }
}
