@include('layout.layout')
<div class="container-sm my-lg-5">
    <form method="POST" action="{{ url('/post/create') }}" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">title</label>
          <input required name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="title">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">snippet</label>
          <input required  name="snippet" type="text" class="form-control" id="snippet">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">body</label>
          <input required  name="body" type="text" class="form-control" id="body">
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Default file input example</label>
            <input required  name="file" class="form-control" type="file" id="formFile">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>
