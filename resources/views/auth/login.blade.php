@include('layout.layout')

<div class=" bg-body my-5 py-3 rounded mx-auto post-form">
    <div class="container-fluid mx-auto">
        <h1 class="text-center">Zaloguj się</h1>
        <form method="POST" action="{{ route('zaloguj') }}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Adres e-mail</label>
              <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Hasło</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
              <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Nie wylogowuj mnie</label>
            </div>
            <button type="submit" class="btn btn-primary">Zaloguj</button>
          </form>
          <div class="text-center">
            <a href="{{ route('rejestracja') }}">Nie masz konta? Zarejestruj sie</a>
          </div>
    </div>

    <x-postbackground/>
</div>
