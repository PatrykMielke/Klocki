@include('layout.layout')
<x-header/>

<div class="container-sm my-lg-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->snippet }}</p>
            <p class="card-text">{{ $post->body }}</p>
        </div>
    </div>
    <form action="{{ url('/post/edit/' . $post->id)}}" method="get">
        @csrf
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <form action="{{ url('/post/destroy/' . $post->id)}}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
    </div>

</div>
<x-footer/>
