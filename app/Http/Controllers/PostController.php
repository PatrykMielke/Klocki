<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.main-page', ['posts' => Post::class::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('posts.create-post');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255|unique:posts',
            'snippet' => 'required|max:255|unique:posts',
            'body' => 'required|max:65535',
        ]);

        Post::create($validated);
        return redirect('/posts');

    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.single-post-page', ['post' =>Post::class::find($post->id)] );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit-post', ['post' =>Post::class::find($post->id)] );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validated = $request->validate([
            'title' => 'required|max:255|unique:posts',
            'snippet' => 'required|max:255|unique:posts',
            'body' => 'required|max:65535',
        ]);
        Post::where('id', $post->id)->update($validated);
        return redirect('/post/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/posts');
    }
}
