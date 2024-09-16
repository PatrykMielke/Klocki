@include('layout.layout')
<div class=" bg-body my-5 py-3 rounded mx-auto post-form">
    <div class="container-fluid mx-auto">
        <h1 class="text-center">Edytuj post</h1>
        <form method="POST" action="{{ url('/post/edit/' . $post->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tytuł</label>
              <input required name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="title" value="{{$post->title}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Opis</label>
              <input required  name="snippet" type="text" class="form-control" id="snippet" value="{{$post->snippet}}">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Treść</label>
              <input required  name="body" type="text" class="form-control" id="body" value="{{$post->body}}">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Tło</label>
                <input name="file" class="form-control" type="file" id="formFile">
              </div>
            <button type="submit" class="btn btn-primary">Edytuj</button>
        </form>
    </div>

    <x-postbackground/>
</div>





