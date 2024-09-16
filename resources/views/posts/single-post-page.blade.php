@include('layout.layout')

<div class="container-sm my-lg-5">
    <div class="card mx-auto mb-3" style="width: 48rem;">
        <img src="{{ asset('post-images/'.$post->path_to_image) }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->body}}</p>
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        @if($post->created_at < $post->updated_at)
                        <p class="card-text"><small class="text-body-secondary">Edytowane: {{date('d.m.Y', strtotime($post->updated_at));}}</small></p>

                        @else
                        <p class="card-text"><small class="text-body-secondary">Dodano: {{date('d.m.Y', strtotime($post->created_at));}}</small></p>

                        @endif
                    </div>
                    <div class="col">
                        <form action="{{ url('/post/edit/' . $post->id)}}" method="get">
                            @csrf
                            <button type="submit" class="btn btn-primary">Edytuj</button>
                        </form>
                    </div>
                    <div class="col">
                        <form action="{{ url('/post/destroy/' . $post->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-primary">Usuń</button>
                        </form>
                    </div>
                  </div>
            </div>
        </div>
      </div>
    </div>
    <x-postbackground/>
</div>

<x-footer/>
