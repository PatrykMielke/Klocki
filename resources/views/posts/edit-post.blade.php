@extends('layout.layout')
<div class="container-sm my-lg-5">
    <form action="{{ url('/post/edit/' . $post->id) }} " method="post">
        @method('PUT')
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">title</label>
          <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" {{ $post->title}}" value = "{{ $post->title}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">snippet</label>
          <input name="snippet" type="text" class="form-control" id="exampleInputPassword1" placeholder=" {{ $post->snippet}}" value = "{{ $post->snippet}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">body</label>
          <input name="body" type="text" class="form-control" id="exampleInputPassword1" placeholder=" {{ $post->body}}" value = "{{ $post->body}}">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
