@extends('layouts.app-master')
@section('title','Login - Swift')

@section('content')
   <style>
      .footer-bs{
         display: none;
      }
   </style>
   <link href="{{ asset('assets/css/signup.css') }}" rel="stylesheet">
   <section id="userLogin">
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
   <script src="{{ asset('assets/js/login.js') }}"></script>
@endsection



