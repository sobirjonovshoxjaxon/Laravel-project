<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klean | Sign up</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">
</head>
<body>
            <section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-lg-12 col-xl-11">
                    <div class="card text-black" style="border-radius: 25px;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                            <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                            <form action="{{ route('register.save') }}" class="mx-1 mx-md-4" method="POST">
                                @csrf 

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                <input name="name" type="text" id="form3Example1c" class="form-control" value="{{ old('name') }}"/>
                                <label class="form-label" for="form3Example1c">Your Name</label>
                                @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                <input name="email" type="email" id="form3Example3c" class="form-control" value="{{ old('email') }}"/>
                                <label class="form-label" for="form3Example3c">Your Email</label>
                                @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                <input name="password" type="password" id="form3Example4c" class="form-control" value="{{ old('password')}}"/>
                                <label class="form-label" for="form3Example4c">Password</label>
                                @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror 
                                </div>
                            </div>

                            <div class="d-flex flex-row align-items-center mb-4">
                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                <div data-mdb-input-init class="form-outline flex-fill mb-0">
                                <input name="password_confirmation" type="password" id="form3Example4cd" class="form-control" value="{{ old('password_confirmation') }}"/>
                                <label class="form-label" for="form3Example4cd">Repeat your password</label>
                                @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                                </div>
                            </div>

                                    <div class="form-group">

                                        <strong>ReCaptcha:</strong>

                                        <div class="g-recaptcha" data-sitekey="{{ env('GOOGLE_RECAPTCHA_KEY') }}"></div>

                                        @if ($errors->has('g-recaptcha-response'))

                                            <span class="text-danger">{{ $errors->first('g-recaptcha-response') }}</span>

                                        @endif

                                    </div>

                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg">Register</button>
                                <a href="{{ route('index.page')}}" class="btn btn-dark btn-lg ms-2">Home</a>
                            </div>

                            
                            </form>

                        </div>
                        <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                                <img src="{{ asset('assets/img/signup.jpg')}}" class="img-fluid" alt="Sample image">


                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                </div>
            </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</body>
</html>