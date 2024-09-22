@include('layout.layout')



<div class="container-sm mx-auto">
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3s">
    @foreach ($posts as $post)
    <div class="col">
        <a class="blog-a" href="{{ url('/post/' . $post->id) }}">
            <div class="card mb-4">

                <img src="{{ asset('post-images/'.$post->image) }}" class="card-img-top" alt="{{$post->image}}">

                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->snippet }}</p>
                    <p class="card-text"><small class="text-muted">
                @if($post->created_at < $post->updated_at)
                    Edytowane: {{date('d.m.Y', strtotime($post->updated_at));}}
                @else
                    Dodano: {{date('d.m.Y', strtotime($post->created_at));}}
                @endif
                    przez {{ $post->user->name }}
                    </small></p>
                </div>
            </div>

        </a>
    </div>
        @endforeach

    </div>

</div>
<div class="container-fluid blurred-index"></div>
