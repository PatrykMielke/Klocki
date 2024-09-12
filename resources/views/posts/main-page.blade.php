@include('layout.layout')

<div class="container-sm ">
    <div class="row row-cols-1 row-cols-md-2 g-4">
    @foreach ($posts as $post)
    <div class="col">
        <a class="blog-a" href="{{ url('/post/' . $post->id) }}">
            <div class="card mb-3">
                <img src="{{ asset('/storage/post-images/dice-1.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->snippet }}</p>
                    <p class="card-text"><small class="text-muted">
                @if($post->created_at < $post->updated_at)
                    Edytowane: {{date('d.m.Y', strtotime($post->updated_at));}}
                @else
                    Dodano: {{date('d.m.Y', strtotime($post->created_at));}}
                @endif
                    </small></p>
                </div>
            </div>

        </a>
    </div>
        @endforeach

    </div>

</div>
<div class="container-fluid blurred-index"></div>
