    <!-- strat header -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand fs-2 fw-bold text-white" href="{{ route('website') }}"
                data-translate="Wejhatee">Wejhatee</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa-solid fa-bars fs-2 text-white"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-4" data-translate="Home" aria-current="page"
                            href="{{ route('website') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-4" data-translate="TouristPalces" aria-current="page"
                            href="#TouristPalces">TouristPalces</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-4" data-translate="Services" aria-current="page"
                            href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-white fs-4" data-translate="Reviews" aria-current="page"
                            href="#Reviews">Reviews</a>
                    </li>
                </ul>
                <select class="form-select mx-lg-3" id="language-selector">
                    <option value="en">English</option>
                    <option value="ar">العربيه</option>
                </select>
                <div class="register d-flex mt-2">
                    @guest
                        <div class="userIcon">
                            <i class="fa-solid fa-user text-white fs-3"></i>
                        </div>
                    @endguest
                    <div class="pages d-flex justify-content-start align-items-center">
                        @guest
                            <div class="signinitem">
                                <a href="#">
                                    <p class="text-white px-1 mx-lg-1" data-translate="login" id="login">login </p>
                                </a>
                                <div class="signinform mt-2 appearform leftdir" id="signinform">
                                    <form method="POST" action="{{ route('login.user') }}" id="form1">
                                        @csrf
                                        <div class="mb-3 row">
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="Emailpassword" name="email"
                                                    placeholder="Email" form="form1">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="inputPassword"
                                                    name="password" placeholder="Password" form="form1">
                                            </div>
                                        </div>
                                        <div class="col-auto text-center">
                                            <button type="submit" class="btn btn-primary mb-3" id="SigninBtn"
                                                data-translate="login" form="form1">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        @endguest
                        @guest
                            <div class="signupitem">
                                <a href="{{ route('register.page') }}">
                                    <p class="text-white px-1 mx-lg-1" data-translate="register">register</p>
                                </a>
                            </div>
                        @endguest

                        <div class="logout">

                            @auth
                                <form method="POST" action="{{ route('logout.user') }}" id="logout">
                                    @csrf
                                    <button type=submit form="logout" type="button"
                                        class="btn btn-primary">logout</button>
                                </form>
                            @endauth

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <!-- end header -->
