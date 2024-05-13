@extends('layouts.app-master')
@section('title','SignUp - Swift')

@section('content')
   <style>
      .footer-bs{
         display: none;
      }
   </style>
   <link href="{{ asset('assets/css/signup.css') }}" rel="stylesheet">
   <section id="userSignup">
         <div class="container">
            <header>SwiftDocsPro SignUp</header>
            <!-- <div class="progress-bars">
               <div class="step">
                  <p></p>
                  <div class="bullet">
                     <span>1</span>
                  </div>
                  <div class="check fas fa-check"></div>
               </div>
               <div class="step">
                  <p></p>
                  <div class="bullet">
                     <span>2</span>
                  </div>
                  <div class="check fas fa-check"></div>
               </div>
               <div class="step">
                  <p></p>
                  <div class="bullet">
                     <span>3</span>
                  </div>
                  <div class="check fas fa-check"></div>
               </div>
               <div class="step">
                  <p></p>
                  <div class="bullet">
                     <span>4</span>
                  </div>
                  <div class="check fas fa-check"></div>
               </div>
            </div> -->
            <div class="form-outer">
               <form action="#">
                  <div class="page slide-page">
                     <div class="alert alert-info mt-5 mb-5">
                        <strong>It is possible you are already in our system</strong><br> Please type your email to search whether a profile has already been created
                     </div>
                     <div class="title">
                        <i style="font-size: 18px;" class="fa fa-user"></i> Check Email
                     </div>
                     <div class="field mb-0">
                        <div class="label">
                           Email Address
                        </div>
                        <input type="text" placeholder="name@example.com" >
                        <!-- <input type="email" name="email" placeholder="Email" required="required"> -->
                     </div>
                     <div class="text-center pt-3">
                        <p class="mb-0">Already have account? <a href="{{ URL('/login') }}" class="text-decoration-none text-primary ml-1">Sign In</a></p>
                     </div>
                     <!-- <div class="field">
                        <div class="label">
                           Middle Name
                        </div>
                        <input type="text">
                     </div>
                     <div class="field">
                        <div class="label">
                           Last Name
                        </div>
                        <input type="text">
                     </div> -->
                     <div class="field">
                        <button style="font-weight: bold;" class="firstNext next">Check For My Account</button>
                     </div>
                  </div>
                  <div class="page">
                     <div class="title">
                        <i style="font-size: 18px;" class="fa fa-edit"></i> Register Account
                     </div>
                     <div class="field">
                     <div class="col-md-6 pe-3">
                        <div class="label">
                           First Name
                        </div>
                        <input type="text">
                     </div>
                     <div class="col-md-6">
                        <div class="label">
                           Last Name
                        </div>
                        <input type="text">
                     </div>
                  </div>
                     <div class="field mb-0">
                     <div class="label">
                        Username
                     </div>
                     <input type="text">                     
                  </div>
                  <span>
                     You can log in with either your email or username
                  </span>
                     <div class="field">
                     <div class="label">
                        Password
                     </div>
                     <input type="password">
                  </div>
                  <div class="field">
                     <div class="label">
                        Confirm Password
                     </div>
                     <input type="password">
                  </div>
                     <div class="field btns">
                        <button class="prev-1 prev">Back</button>
                        <button class="submit">Sign Up</button>
                     </div>
                  </div>
                  
               </form>
            </div>
         </div>
   </section>
   <script src="{{ asset('assets/js/registration.js') }}"></script>
@endsection
            


           