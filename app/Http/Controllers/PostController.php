<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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
        $rules = [
            'title' => 'required|max:255',
            'snippet' => 'required|max:255',
            'body' => 'required|max:65535',
            'file' => 'required|max:2048|mimes:jpg,png,webp,jpeg',
        ];

        $validator = Validator::make(
            data: $request->all(),
            rules: $rules
        );

        if ($validator->fails()) {
            dd("error");
        }

        if ($request->hasFile('file')) {

            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $fileName = time() . rand(1000,9999) . '.' . $extension;
            $file->move('post-images/',$fileName);

            /* if(!Storage::disk('public_uploads')->put($path, $file_content)) {
                return false;
            } */
        }
        else{
            dd("error");
        }

        Post::create(
            [
                'title' => $request->title,
                'snippet' => $request->snippet,
                'body' => $request->body,

                'path_to_image' => $fileName,
            ]
        );
        return redirect('/posty');

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
            'title' => 'required|max:255',
            'snippet' => 'required|max:255',
            'body' => 'required|max:65535',
            //'file' => 'required|mimes:jpg,png,pdf|max:2048',
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
        return redirect('/posty');
    }
}
