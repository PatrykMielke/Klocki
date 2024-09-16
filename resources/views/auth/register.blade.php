@include('layout.layout')

<div class=" bg-body my-5 py-3 rounded mx-auto post-form">
    <div class="container-fluid mx-auto">
        <h1 class="text-center">Zarejestruj się</h1>
        <form method="POST" action="{{ route('zarejestruj') }}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputText" class="form-label">Nazwa</label>
              <input name="name" type="text" class="form-control" id="exampleInputText" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Adres e-mail</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Hasło</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Powtórz hasło</label>
              <input name="password_confirmation" type="password" class="form-control" id="exampleInputPassword1">
            </div>

            <button type="submit" class="btn btn-primary">Zarejestruj</button>
          </form>
    </div>

    <x-postbackground/>
</div>
