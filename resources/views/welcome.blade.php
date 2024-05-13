<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Swift Docs Pro</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/image/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- font-awesome 4.7.0-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets/css/styles.css" rel="stylesheet" />
        <link href="assets/css/theme.css" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column h-100">
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

            <!-- banner-background section-->
            <section class="banner-background">
                <div class="row">
                    <img class="logo-words" src="assets/image/logo2.png" alt="SwiftDocsPro Words" data-nsfw-filter-status="sfw" style="visibility: visible;">
                    <p id="banner-text-1" class="text-center">POWERFUL · INTUITIVE</p>
                    <p id="banner-text-2" class="text-center ma-10">ORDER SCHEDULING PLATFORM</p>
                    <hr class="rounded">
                    <p id="banner-text-3" class="text-center">Title Software Integration powered by:
                        <span>
                            <a href="#">
                                <img id="banner-brand" src="assets/image/logo.png" alt="Notary Loop Logo">
                            </a>
                        </span>
                    </p>
                    <div style="display: flex; justify-content:center;">
                        <iframe id="demo-video" src="https://www.youtube.com/embed/qZxQcDHvUUI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>
                    </div>
                    <div class="ad-area">
                        <p>Only $3 per order! · Over 40k Notaries and Attorneys · No Long Term Contracts - Month to Month!</p>
                    </div>
                    <a href="#" style="display: flex; justify-content:center; text-decoration:none;">
                        <button id="banner-button" class="btn ma-10 rounded-lg text-center" type="button" fdprocessedid="a33t0b">
                            GET STARTED
                        </button>
                    </a>
                </div>
            </section>

            <!-- Features section-->
            <section id="features" class="text-areas">
                <div class="container">
                    <div class="row flex-row">
                        <p class="home-description">
                            Swift Docs Pro is the most powerful, intuitive scheduling
                            and order management platform for real estate signings.
                        </p>
                    </div>
                    <h1 class="section-title">Features</h1>
                    <div class="container">
                        <hr class="rounded" style="border-color: #F48235;">
                    </div>
                    <div id="features-row-one" class="container">
                        <div class="row flex-row justify-content-around">
                            <div class="n-card feature-card flex-col">
                                <p class="features-lists-h">
                                    <span>
                                        <i class="card-icon fa fa-refresh"></i>
                                    </span>Instant Updates</p>
                                <hr class="card-separator">
                                <p class="features-lists-b">Stay updated when a notary vendor receives their signing order, confirms
                                    their appointment and downloads documents.</p>
                            </div>
                            <div class="n-card feature-card flex-col">
                                <p class="features-lists-h">
                                    <span>
                                        <i class="card-icon fa fa-line-chart"></i>
                                    </span>Manage your Orders with Ease
                                </p>
                                <hr class="card-separator">
                                <p class="features-lists-b">You can easily manage your volume of orders at scale more efficiently with
                                    less manpower.</p>
                            </div>
                        </div>
                    </div>
                    <div id="features-row-two" class="container">
                        <div class="row flex-row justify-content-around">
                            <div class="n-card feature-card flex-col">
                                <p class="features-lists-h"><span><i class="card-icon fa fa-calendar"></i>
                                    </span>Automated Text &amp; Email Scheduling</p>
                                <hr class="card-separator">
                                <p class="features-lists-b">Schedule your signings faster with our fully customized automation tools.</p>
                            </div>
                            <div class="n-card feature-card flex-col">
                                <p class="features-lists-h"><span><i class="card-icon fa fa-clock-o"></i>
                                    </span>Title &amp; Accounting Integration</p>
                                <hr class="card-separator">
                                <p class="features-lists-b">Save time spent on creating orders and invoicing with our title software
                                  and Quickbooks integration (Online &amp; Desktop).</p>
                            </div>
                        </div>
                    </div>        
                </div>   
            </section> 

            <!-- Banner section-->
            <section id="banner" class="banner-solid">
                <div class="cloud">
                    <div class="banner-container">
                        <p class="banner-title">SECURITY IN THE CLOUD</p>
                        <p class="banner-text">Give your clients the power to sign in from anywhere.</p>
                        <br>
                        <div class="container">
                            <div class="row flex-row">
                                <div class="n-card tile-card flex-col">
                                    <i class="tile-icon fa fa-calendar"></i>
                                    <p class="tile-text">Entering Schedule Orders</p>
                                </div>
                                <div class="n-card tile-card flex-col">
                                    <i class="tile-icon fa fa-envelope"></i>
                                    <p class="tile-text">System Email Client Updates</p>
                                </div>
                                <div class="n-card tile-card flex-col">
                                    <i class="tile-icon fa fa-upload"></i>
                                    <p class="tile-text">Quick, Simple Uploads</p>
                                </div>
                                <div class="n-card tile-card flex-col">
                                    <i class="tile-icon fa fa-file"></i>
                                    <p class="tile-text">Downloadable Invoices</p>
                                </div>
                            </div>
                        </div>
                        <p class="banner-title text-center spaced-letters">IMPRESS YOUR CLIENTS</p>
                        <p class="banner-text text-center">
                            Switch to Swift Docs Pro for a more powerful, intuitive, customized real estate signing platform.
                        </p>
                        <div class="text-center">
                            <button class="btn ma-10 rounded-lg text-center features-btn" fdprocessedid="m4xjm">
                                <a href="#" style="text-decoration: none;">FEATURES</a>
                            </button>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Benefits section-->
            <section id="benefits" class="text-areas">
                <h1 class="section-title">Benefits</h1>
                <h3 class="text-center">Swift Docs Pro is a practical and inexhaustible solution</h3>
                <div class="container">
                    <hr class="rounded" style="border-color: #F48235;">
                </div>
    
                <div id="benefits-one" class="container">
                    <div class="row flex-row">
                        <div class="n-card flex-col">
                            <p class="benefits-panels-h"><span><i class="fa fa-puzzle-piece"></i>
                                </span>Title Software Integration</p>
                            <hr class="card-separator">
                            <p class="features-lists-b">Title companies using Ramquest, ResWare, Softpro 360, E-Closing,
                                Impact/SQL (and Online), Closer's Choice, AccuTitle (TitleDesktop) and LandTech are now
                                integrated with Swift Docs Pro through
                                <a href="#" rel="noopener noreferrer" target="_blank">Swift</a>.
                                This integration reduces data entry, allowing seamless order placement from the title production
                                software to your Swift Docs Pro dashboard. Documents can be securely shared with all parties
                                without the need for uploading or emailing. The integration gives title agents, escrow officers
                                and signing services the ability to pass notes and statuses without leaving their production
                                software.</p>
                        </div>
                    </div>
                </div>   

                <div id="benefits-two" class="container">            
                    <div class="row">
                        <div id="bt1" class="col-lg-6" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-blue clickable">
                                <div class="panel-heading" role="tab" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <h5 class="panel-title">
                                        <span>
                                            <i class="panel-icon fa fa-calendar"></i>Assign &amp; Schedule
                                        </span>
                                    </h5>
                                </div>
                                <div class="panel-collapse accordion-collapse collapse" id="collapseOne" data-bs-parent="#bt1">
                                    <div class="panel-body">
                                        Searching for experienced ALTA compliant notary vendors is not only a cinch, but
                                        SwiftDocsPro provides you with a powerful search engine with specific filters
                                        allowing you to choose the most qualified notaries for your orders.
                                    </div>
                                </div>
                            </div>                    
                            <div class="panel panel-blue clickable">
                                <div class="panel-heading" role="tab" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    <h5 class="panel-title">
                                        <span>
                                            <i class="panel-icon fa fa-comment"></i>Text Communication
                                        </span>
                                    </h5>
                                </div>
                                <div class="panel-collapse accordion-collapse collapse" id="collapseTwo"  data-bs-parent="#bt1">
                                    <div class="panel-body">
                                        Reaching your notary vendors for their availability through text messaging is much
                                        quicker than calling or sending an email. Want to send text messages out to multiple
                                        notaries to find availability fast on last minute assignments? Now you can! You also
                                        will be able to send your hired notaries text updates when an order is sent to them and
                                        when documents are ready to be downloaded and printed.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-blue clickable">
                                <div class="panel-heading" role="tab" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    <h5 class="panel-title">
                                        <span>
                                            <i class="panel-icon fa fa-envelope"></i>System Emails
                                        </span>
                                    </h5>
                                </div>
                                <div class="panel-collapse accordion-collapse collapse" id="collapseThree"  data-bs-parent="#bt1">
                                    <div class="panel-body">
                                        SwiftDocsPro offers many customizable system emails to communicate with your clients and
                                        your vendors. Each system email can be configured to dynamically insert order
                                        information, vendor profiles or even your customer's profile!
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="bt2" class="col-lg-6" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-blue clickable">
                                <div class="panel-heading" role="tab" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    <h5 class="panel-title">
                                        <span>
                                            <i class="panel-icon fa fa-lightbulb-o"></i>Be in the Know
                                        </span>
                                    </h5>
                                </div>
                                <div class="panel-collapse accordion-collapse collapse" id="collapseFour" data-bs-parent="#bt2">
                                    <div class="panel-body">
                                        Know exactly when your notary vendor has received orders, printed confirmation, and even
                                        when they have confirmed the order with signers. You will receive system alerts when
                                        documents are downloaded and when the notary has uploaded faxes and scanbacks into the
                                        portal.
                                    </div>
                                </div>
                            </div>                    
                            <div class="panel panel-blue clickable">
                                <div class="panel-heading" role="tab" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                    <h5 class="panel-title">
                                        <span>
                                            <i class="panel-icon fa fa-database"></i>Order Management
                                        </span>
                                    </h5>
                                </div>
                                <div class="panel-collapse accordion-collapse collapse" id="collapseFive"  data-bs-parent="#bt2">
                                    <div class="panel-body">
                                        This is where all the magic happens. Monitoring and managing your orders has never been
                                        so efficient. You control what orders you want to see, and display specified data on
                                        each order you want displayed.
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-blue clickable">
                                <div class="panel-heading" role="tab" id="headingOne" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                    <h5 class="panel-title">
                                        <span>
                                            <i class="panel-icon fa fa-arrows"></i>Accounting Integration
                                        </span>
                                    </h5>
                                </div>
                                <div class="panel-collapse accordion-collapse collapse" id="collapseSix"  data-bs-parent="#bt2">
                                    <div class="panel-body">
                                        You can lay off your bookkeeper when you start using SwiftDocsPro. No more time will be
                                        spent entering customer invoicing and notary payment data. No more clerical errors
                                        invoicing your customer for less and losing money, or for too much upsetting your
                                        clients.
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <!-- Review carousel section-->
            <section id="carouselReviews" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselReviews" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselReviews" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselReviews" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/image/Happy_Clients1.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="testimony-title">Our Happy Clients</p>
                        <p class="client-message">"I am nothing but impressed with how fast and effectively I
                            was able to get the support I needed through SwiftDocsPro. It's my 1 stop resource
                            for all my realty needs! ”</p>
                        <p class="client-name">J. Storme</p>
                        <p class="company">Baxter &amp; Co.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/image/Happy_Clients2.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="testimony-title">Our Happy Clients</p>
                        <p class="client-message">"Before I started using SwiftDocsPro, I had been falling
                            further and further behind with getting paperwork not getting done and notarized in
                            a manner that suits my workflow.”
                        </p>
                        <p class="client-name">Felicia H.</p>
                        <p class="company">Enterprise Company Realty</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="assets/image/Happy_Clients3.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <p class="testimony-title">Our Happy Clients</p>
                        <p class="client-message">"As a real estate agent, I have been searching many years for
                            a web resource with as many qualities as I have found with SwiftDocsPro.”
                        </p>
                        <p class="client-name">R. Jones</p>
                        <p class="company">Title Company Agent</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control carousel-control-prev" type="button" data-bs-target="#carouselReviews" data-bs-slide="prev">
                    <span><i class="fa fa-fw fa-chevron-left"></i></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control carousel-control-next" type="button" data-bs-target="#carouselReviews" data-bs-slide="next">
                    <span><i class="fa fa-fw fa-chevron-right"></i></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </section>

            <!-- Team members section-->
            <section class="py-5 team-members">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="fw-bolder">Our team</h2>
                        <p class="lead fw-normal text-muted mb-5">Dedicated to quality and your success</p>
                    </div>
                    <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="assets/image/avatar1.jpg" alt="..." />
                                <h5 class="fw-bolder">Gourav Duggal</h5>
                                <div class="fst-italic text-muted">Founder &amp; CEO</div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                                <h5 class="fw-bolder">Malvina Cilla</h5>
                                <div class="fst-italic text-muted">CTO</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-sm-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="https://dummyimage.com/150x150/ced4da/6c757d" alt="..." />
                                <h5 class="fw-bolder">Toribio Nerthus</h5>
                                <div class="fst-italic text-muted">Operations Manager</div>
                            </div>
                        </div>
                        <div class="col mb-5 mb-5 mb-xl-0">
                            <div class="text-center">
                                <img class="img-fluid rounded-circle mb-4 px-4" src="assets/image/avatar2.jpg" alt="..." />
                                <h5 class="fw-bolder">Nelson Mujica</h5>
                                <div class="fst-italic text-muted">Fullstack Developer</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  
        </main>

        <!-- Footer-->
        <footer class="footer-bs py-4 mt-auto">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 animated fadeInLeft">
                        <a href="#">
                            <img class="footer-brand" src="assets/image/logo.png" alt="SwiftDocsPro Logo" data-nsfw-filter-status="sfw" style="width: 10rem; visibility: visible;">
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
                                <li><a href="{{ route('register') }}">SIGNUP</a></li>
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
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/registration.js"></script>
    </body>
</html>
