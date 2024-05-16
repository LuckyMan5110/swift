<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
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
        <link href="{{ asset('assets/css/theme.css') }}" rel="stylesheet">
        <!-- jquery 3.5.1-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <nav class="navbar navbar-expand-lg bg-light fixed-top">
                <div class="container-fluid">
                      <a class="navbar-brand" href="{{ URL('/') }}"><img src="{{ asset('assets/image/favicon.ico') }}" style="width: 2.5rem" alt="logo" />SWIFT DOCS PRO</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{ URL('/') }}">HOME</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ URL('/') }}">TITLE & ESCROW</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ URL('/') }}">LENDER</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ URL('/') }}">NOTART</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ URL('/') }}">SIGNING SERVICE</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="{{ route('register.perform') }}">SIGNUP</a></li> --}}
                         </ul>
                         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            @auth
                                {{-- <li class="nav-item"><a class="nav-link" href="{{ URL('/login') }}">aaaaa</a></li> --}}
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{Auth::user()->username}}</a>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                        <li><a class="dropdown-item" href="{{ URL('/') }}">Settings</a></li>
                                        <li><a class="dropdown-item"  href="{{ route('logout.perform') }}">Log Out</a></li>
                                    </ul>
                                </li>
                            @endauth
                            
                            @guest
                                <li class="nav-item"><a class="nav-link" href="{{ URL('/login') }}">LOGIN</a></li>
                            @endguest
                         </ul>
                      </div>
                </div>
             </nav>
			@yield('content')
        </main>

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
                                <li><a href="{{ URL('/') }}">HOME</a></li>
                                <li><a href="{{ URL('/') }}">TITLE & ESCROW</a></li>
                                <li><a href="{{ URL('/') }}">LENDER</a></li>
                                <li><a href="{{ URL('/') }}">NOTART</a></li>
                                <li><a href="{{ URL('/') }}">SIGNING SERVICE</a></li>
                                {{-- <li><a href="{{ route('register.perform') }}">SIGNUP</a></li> --}}
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list">
                                <li><a href="{{ URL('/') }}">Contact</a></li>
                                <li><a href="{{ URL('/') }}">Privacy</a></li>
                                <li><a href="{{ URL('/') }}">Terms of Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 footer-ns animated fadeInRight">
                        <h4>Inquiries</h4>
                        <form>
                            <input type="hidden" name="core_btZyx4ZsXBL7KJxqyWfC5chB5K72rpDm" value="d94baa1e7e566c3dd1ca2a6ae5d57728" style="display:none;">
                            <div class="form-group col-lg-12">
                                <input type="text" name="name" class="form-control" placeholder="Name" required="required" fdprocessedid="oxxlyn">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="text" name="email" class="form-control" placeholder="Email" required="required" fdprocessedid="3i1khs">
                            </div>
                            <div class="form-group  col-lg-12">
                                <textarea type="text" rows="3" name="comments" class="form-control" placeholder="How may we help?" required=""></textarea>
                            </div>
                            <!-- <div class="form-group col-lg-12">
                                <div class="g-recaptcha" data-sitekey="6Ldwl58UAAAAAMPgHjrMs40Yn6XQI0d7-e5TH70F"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-9kk5l3b9jbk5" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="./SwiftDocsPro __ Notary Database and Scheduling Platform_files/anchor.html"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;" src="./SwiftDocsPro __ Notary Database and Scheduling Platform_files/saved_resource.html"></iframe></div>
                            </div> -->
                            <div class="col-lg-12 d-flex justify-content-center form-group  col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-8 col-xs-offset-2">
                                <button type="submit" class="btn ma-10 rounded-lg text-center submit-btn" fdprocessedid="5ausd9p">Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </footer>
        
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('assets/js/scripts.js') }}"></script>
    </body>
</html>
