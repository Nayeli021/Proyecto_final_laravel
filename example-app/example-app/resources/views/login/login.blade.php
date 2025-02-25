@extends('body.cuerpo')

@section('title', 'Login')

@section('content')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<section class="vh-100" style="background-color: #9A616D;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/img1.webp"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">

            <form action="{{ route('login') }}" method="POST">
            @csrf

              <div class="card-body p-4 p-lg-5 text-black">

                <form>

                  <div class="d-flex align-items-center mb-3 pb-1">

                  
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">LOGIN</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">NAYELI</h5>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <input type="email" name="email" class="form-control form-control-lg" id="email" aria-describedby="emailHelp" placeholder="Correo Electronico" required>
                    <label class="form-label" for="form2Example17">Correo Electronico</label>
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                  <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Contraseña" required>
                    <label class="form-label" for="form2Example27">Contraseña</label>
                  </div>
                  <button type="submit" class="btn btn-primary btn-lg btn-block">Ingresar</button>
                  <div class="pt-1 mb-4">
                  
                  </div>

                  <a class="small text-muted" href="#!">Forgot password?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="#!"
                      style="color: #393f81;">Register here</a></p>
                  <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


@endsection
