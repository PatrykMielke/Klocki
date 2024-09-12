@include('layout.layout')

<div class="container text-center">
    <h1 class="py-5 display-1 text-white">Znajdź nas!</h1>

</div>

<div class="container bg-light">
    <div class="container text-center">
        <div class="row">
          <div class="col">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9881.972885817604!2d19.457144787158192!3d51.74230400000004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x471a34bfaf2d85fd%3A0xaac81a85e24a1b85!2sSEBDAN.PL%20Us%C5%82ugi%20Informatyczne!5e0!3m2!1spl!2spl!4v1726149285739!5m2!1spl!2spl" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

          </div>
          <div class="col">
            <div class="card my-4">
              <h5 class="card-header">Kontakt</h5>
              <div class="card-body">
                <form>
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email</label>
                      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Wiadomosc</label>
                      <input name="message" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary">Wyślij</button>
                  </form>
              </div>
            </div>
            <div class=" my-4">
                <h4>Telefon: 123 456 789</h4>
                <h4>Email: kontakt@kostki.pl</h4>
                <h4>Adres: Kalista 11/17, Łódź</h4>
            </div>

          </div>
        </div>

    </div>
</div>

<div class="container-fluid blurred-index"></div>

<x-footer/>
