<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>
    <!-- css file -->
    <link rel="stylesheet" href="{{ asset('assets/css/master.css') }}">
    <!-- Render elements normaly -->
    <link rel="stylesheet" href="{{ asset('assets/css/Normarize.css') }}">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@500;600&family=Poppins:ital,wght@0,300;0,400;0,500;1,300;1,400;1,500&family=Ubuntu:ital,wght@0,300;0,400;1,300;1,400;1,500&display=swap"
        rel="stylesheet">
    <!-- Bootstrap link  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <!-- strat header -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fs-2 fw-bold text-white" href="index.html" data-translate="Wejhatee">Wejhatee</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars fs-2 text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-4" data-translate="Home" aria-current="page"
                            href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-4" data-translate="TouristPalces" aria-current="page"
                            href="#">TouristPalces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-4" data-translate="Services" aria-current="page"
                            href="#">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-4" data-translate="Reviews" aria-current="page"
                            href="#">Reviews</a>
                    </li>
                </ul>
                <select class="form-select mx-lg-3" id="language-selector">
                    <option value="en">English</option>
                    <option value="ar">العربيه</option>
                </select>
                <div class="register d-flex mt-2">
                    <div class="userIcon">
                        <i class="fa-solid fa-user text-white fs-3"></i>
                    </div>
                    <div class="pages d-flex justify-content-start align-items-center">
                        <div class="signupitem">
                            <a href="signup.html">
                                <p class="text-white px-1 mx-lg-1" data-translate="register">register</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- start signup page -->
    <div class="signupform mt-4 ">

        <div class="container-fluid d-flex align-items-center justify-content-center" style="min-height: 100vh">
            <div class="container col-md-6 ">
                @if (Session::has('success'))
                    <div class="row mr-2 ml-2">
                        <button type="text" class="btn btn-lg btn-block btn-outline-success mb-2"
                            id="type-error">{{ Session::get('success') }}
                        </button>
                    </div>
                @endif
                <h2 class="text-center mb-4" data-translate="SignUp">Sign Up</h2>

                <form method="POST" action="{{ route('register.user') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label" data-translate="Username"
                            data-translate="name">name:</label>
                        <input type="text" class="form-control w-100" id="name" name="name"
                            class="@error('name') is-invalid @enderror">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="phonenum" class="form-label" data-translate="Username"
                            data-translate="phone">phone:</label>
                        <input type="number" class="form-control w-100" id="phone" name="phone">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="country" class="form-label" data-translate="Email">country:</label>
                        <input type="text" class="form-control w-100" id="country" name="country"
                            class="form-control @error('country') is-invalid @enderror">
                    </div>
                    @error('country')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <div class="mb-3">
                        <label for="email" class="form-label" data-translate="Email">Email:</label>
                        <input id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label" data-translate="password">Password:</label>
                        <input id="password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password"
                            autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary d-block mx-auto" id="SignupBtn"
                        data-translate="SignUp">Sign up</button>
                </form>
            </div>
        </div>
    </div>
    <!-- font awesom  -->
    <!-- font awesome library -->
    <script src="https://kit.fontawesome.com/4964aa4896.js" crossorigin="anonymous"></script>
    <!-- Send sign up page -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"
        integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous">
    </script>
    <script src="{{ asset('assets/main.js') }}"></script>
</body>

</html>
