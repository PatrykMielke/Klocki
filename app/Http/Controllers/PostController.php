<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('posts.main-page', ['posts' => Post::class::where('is_published', true)->get()]);
    }
    public function unpublished()
    {
        return view('posts.main-page', ['posts' => Post::class::where('is_published', false)->get()]);
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

        }
        else{
            dd("error");
        }
        $publish = $request->publish ? true : false;
        Post::create(
            [
                'title' => $request->title,
                'snippet' => $request->snippet,
                'body' => $request->body,
                'image' => $fileName,
                'user_id' => Auth::user()->id,
                'is_published' => $publish,
            ]
        );
        return redirect('/post');

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
        $rules = [
            'title' => 'required|max:255',
            'snippet' => 'required|max:255',
            'body' => 'required|max:65535',
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
            $validator = Validator::make(
                data: [$file],
                rules: ['file' => 'max:2048|mimes:jpg,png,webp,jpeg'],
            );

            if ($validator->fails()) {
                dd("error");
            }

            $currentImage = Post::find($post->id)->path_to_image;

            File::delete('post-images/'.$currentImage);


            $extension = $file->getClientOriginalExtension();
            $fileName = time() . rand(1000,9999) . '.' . $extension;
            $file->move('post-images/',$fileName);

            Post::where('id', $post->id)->update([
                'title' => $request->title,
                'snippet' => $request->snippet,
                'body' => $request->body,
                'path_to_image' => $fileName,
            ]);

            return redirect('/post/' . $post->id);
        }

        Post::where('id', $post->id)->update([
            'title' => $request->title,
            'snippet' => $request->snippet,
            'body' => $request->body,
        ]);
        return redirect('/post/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {

        $currentImage = Post::find($post->id)->path_to_image;
        File::delete('post-images/'.$currentImage);

        Post::destroy($post->id);
        return redirect('/post');
    }

    public function publishPost(Post $post){
        Post::where('id', $post->id)->update([
            'is_published' => true,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
        return redirect('/post');
    }
}
