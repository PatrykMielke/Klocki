@extends('layout.layout')

<div class="container-sm my-lg-5">
    @foreach ($posts as $post)
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <p class="card-text">{{ $post->snippet }}</p>
            </div>
        </div>
    @endforeach
</div>
