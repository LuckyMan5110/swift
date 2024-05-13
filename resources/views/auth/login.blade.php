<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content />
        <meta name="author" content />
        <title>Sign Up</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/image/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- font-awesome 5.15.3-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link href="assets/css/theme.css" rel="stylesheet" />
        <link href="assets/css/signup.css" rel="stylesheet" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg bg-light fixed-top">
                <div class="container-fluid">
                      <a class="navbar-brand" href="{{ URL('/') }}"><img src="assets/image/logo.png" style="width: 2.5rem" alt="logo" />SWIFT DOCS PRO</a>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                         <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{ URL('/') }}">HOME</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ URL('/') }}">TITLE & ESCROW</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ URL('/') }}">LENDER</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ URL('/') }}">NOTART</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ URL('/') }}">SIGNING SERVICE</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">SIGNUP</a></li>
                         </ul>
                         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{ URL('/login') }}">LOGIN</a></li>
                         </ul>
                      </div>
                </div>
             </nav>

            <section id="signup">
                <div class="container">
                    <header>SwiftDocsPro</header>

                    <div class="form-outer">
                       <form action="#">
                          <div class="page">
                             <div class="title">
                                <i style="font-size: 18px;" class="fa fa-user"></i> User Login
                             </div>
                             
                             <div class="field">
                              <div class="label">
                                 Username or Email
                              </div>
                              <input type="text">                     
                           </div>
                            <div class="field mb-1">
                              <div class="label">
                                 Password
                              </div>
                              <input type="password">
                           </div>
                           <div class="text-center pt-3">
                              <p class="mb-0">Not a member? <a href="{{ URL('/register') }}" class="text-decoration-none text-primary ml-1">Sign Up now</a></p>
                          </div>
                             <div class="field btns">
                                <button class="submit">Log In</button>
                             </div>
                          </div>
                          
                       </form>
                    </div>
                 </div>
            </section>

        </main>


        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/login.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
