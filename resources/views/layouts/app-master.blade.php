<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="SWIFT DOCS PRO" />
        <meta name="author" content="" />
        <title>@yield('title')</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="{{ asset('assets/image/favicon.ico') }}" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- font-awesome 4.7.0-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
        <!-- Custom CSS-->
        <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
        <!-- jquery 3.5.1-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>

    <body class="d-flex flex-column h-100">
        <!-- GLOABAL LOADER -->
        <div id="global-loader">
            <div class="loader-text">
                <h1 class="text-center">SWIFT DOCS PRO</h1>
            </div>
            <img src="{{ asset('assets/image/loader.svg') }}" class="loader-img" alt="Loader">
        </div>

        @include('layouts.partials.messages')

        <main class="flex-shrink-0" style="background-image: linear-gradient(70deg, #140E38 0%, #140E38 25%, #14387B 35%, #14387B 65%, #140E38 75%, #140E38 100%);">
            <nav class="navbar navbar-expand-lg fixed-top" id="header">
              <div class="container-fluid">
                    <a class="navbar-brand" href="{{ route('home.index') }}"><img src="{{ asset('assets/image/favicon.ico') }}" style="width: 2.5rem" alt="logo" />SWIFT DOCS PRO</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                          <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">HOME</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">TITLE & ESCROW</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">LENDER</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">NOTARY</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">SIGNING SERVICE</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{ route('home.index') }}">SIGNING SERVICE</a></li>
                          <li class="nav-item"><a class="nav-link" href="{{ route('home.contact') }}">CONTACT</a></li>
                          {{-- <li class="nav-item"><a class="nav-link" href="{{ route('register.perform') }}">SIGNUP</a></li> --}}
                        </ul>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                          @auth
                              {{-- <li class="nav-item"><a class="nav-link" href="{{ URL('/login') }}">aaaaa</a></li> --}}
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->username}}</a>
                                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                      <li><a class="dropdown-item" href="{{ route('user.index') }}">Settings</a></li>
                                      <li><a class="dropdown-item"  href="{{ route('logout.perform') }}">Log Out</a></li>
                                  </ul>
                              </li>
                          @endauth
                          
                          @guest
                              <li class="nav-item"><a class="nav-link" href="{{ route('login.show') }}">LOGIN</a></li>
                          @endguest
                        </ul>
                    </div>
              </div>
            </nav>

			@yield('content')
            <!-- Footer-->
            <footer class="footer-bs py-4 mt-auto">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 animated fadeInLeft">
                            <a href="#">
                                <img class="footer-brand" src="{{ asset('assets/image/favicon.ico') }}" alt="SwiftDocsPro Logo" data-nsfw-filter-status="sfw" style="width: 10rem; visibility: visible;">
                            </a>
                            <h4 class="footer-brand-text">Swift Docs Pro is everything you need.</h4>
                            <br>
                            <p class="footer-brand-text">Support: <a class="footer-links" href="mailto:www.cloudsignings.com">www.cloudsignings.com</a>
                            </p>
                            <p class="footer-brand-text">Phone: <a class="footer-links" href="tel:+18882506211">(714) 747-3209</a></p>
                            <p class="footer-brand-text">© 2024 SwiftDocsPro, All rights reserved</p>
                        </div>
                        <div class="col-lg-4 footer-nav animated fadeInUp row align-content-sm-start">
                            <h4 class="footer-brand-text">Menu —</h4>
                            <div class="col-md-6">
                                <ul class="pages">
                                    <li><a href="{{ route('home.index') }}">HOME</a></li>
                                    <li><a href="{{ route('home.index') }}">TITLE & ESCROW</a></li>
                                    <li><a href="{{ route('home.index') }}">LENDER</a></li>
                                    <li><a href="{{ route('home.index') }}">NOTART</a></li>
                                    <li><a href="{{ route('home.index') }}">SIGNING SERVICE</a></li>
                                    {{-- <li><a href="{{ route('register.perform') }}">SIGNUP</a></li> --}}
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul class="list">
                                    <li><a href="{{ route('home.index') }}">Contact</a></li>
                                    <li><a href="{{ route('home.index') }}">Privacy</a></li>
                                    <li><a href="{{ route('home.index') }}">Terms of Service</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 footer-ns animated fadeInRight">
                            <h4>Inquiries</h4>
                            <form method="post" action="{{ route('home.sendMsg') }}">
                                @csrf
                                <div class="form-group col-lg-12">
                                    <input type="text" name="name" class="form-control" placeholder="Full name" required="required">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="email" name="email" class="form-control" placeholder="Email address" required="required">
                                </div>
                                <div class="form-group col-lg-12">
                                    <input type="text" name="phone_number" class="form-control" placeholder="Phone number" required="required">
                                </div>
                                <div class="form-group  col-lg-12">
                                    <textarea type="text" rows="3" name="message" class="form-control" placeholder="Message" required=""></textarea>
                                </div>
                                <div class="col-lg-12 d-flex justify-content-center form-group  col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                                    <button type="submit" class="btn ma-10 rounded-lg text-center submit-btn">Submit
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </footer>
        </main>

        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

        <!-- Core theme JS-->
        <script src="{{ asset('assets/js/app.js') }}"></script>
    </body>
</html>
