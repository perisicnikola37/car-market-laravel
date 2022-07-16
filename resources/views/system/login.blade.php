<!DOCTYPE html>
<html lang="en">

<head>

  <!-- Default meta data -->

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#fff">

  <!-- Meta info -->

  <meta name="author" content="Nikola Perišić">
  <!-- Website Description -->
  <meta name="description" content="Najposjećeniji sajt za prodaju polovnih i novih automobila, motora, bicikala, kamiona, radnih mašina, poljoprivrednih mašina, plovila, kao i auto dijelova i opreme u Crnoj Gori.">
  <meta name="keywords" content="cars bmw audi mercedes">

  <!-- Website Title -->

  <title>Prijavi se | AutoDiler - Auto oglasi, prodaja djelova, auto placevi, auto saloni Crna Gora</title>

  <!-- Website Avatar -->

  <link rel="icon" href="img/optimized images/logo_min.png">

  <!-- Custom fonts for this template-->
  <link href="{{asset('vendor/fontawesome-free/css/all.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">


</head>

<body class="bg-gradient-dark-login">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              
              <div class="col-sm-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-sm-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Dobrodošli nazad!</h1>
                  </div>

                  {{--  --}}
                  <form class="user" method="POST" action="{{ route('login') }}">

                  @csrf

                    <div class="form-group">
      <input id="exampleInputEmail" type="email" class="form-control form-control-user
      @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Ukucajte Vašu email adresu...">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                      <div class="form-group">

         
                          <input id="exampleInputPassword" type="password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Lozinka">

                          @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror

                      </div>
  
                      <div class="form-group">
               
                            <div class="custom-control custom-checkbox small">
                                <input class="custom-control-input" type="checkbox" name="remember" id="customCheck" {{ old('remember') ? 'checked' : '' }}>

                                <label class="custom-control-label" for="customCheck">
                                    {{ __('Zapamti') }}
                                </label>
                            </div>
               
                      </div>
     
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                {{ __('Prijavi se') }}
                            </button>

                    <hr>
                    <a href="#" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Uloguj se pomoću Google-a
                    </a>
                    <a href="#" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Uloguj se pomoću Facebook-a
                    </a>
                  </form>
                  <hr>
                  <div class="text-center small">
                    @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">
                        {{ __('Zaboravili ste lozinku?') }}
                    </a>
                @endif
                  </div>
                  <div class="text-center">
                    <a class="small" href="/register">Napravi nalog!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"   integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"   crossorigin="anonymous"></script>


</body>

</html>
