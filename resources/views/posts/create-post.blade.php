@include('layout.layout')
<div class=" bg-body my-5 py-3 rounded mx-auto post-form">
    <div class="container-fluid mx-auto">
        <h1 class="text-center">Utwórz nowy post</h1>
        <form method="POST" action="{{ url('/post/create') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tytuł</label>
              <input required name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="title">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Opis</label>
              <input required  name="snippet" type="text" class="form-control" id="snippet">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Treść</label>
              <input required  name="body" type="text" class="form-control" id="body">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Tło</label>
                <input required  name="file" class="form-control" type="file" id="formFile">
            </div>
            <div class="mb-3 form-check">
                <input name="publish"type="checkbox" class="form-check-input" id="exampleCheck1" checked>
                <label class="form-check-label" for="exampleCheck1">Opublikuj</label>
            </div>

            <button type="submit" class="btn btn-primary">Utwórz</button>
        </form>
    </div>

    <x-postbackground/>
</div>
