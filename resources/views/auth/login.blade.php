@extends('layouts.app-master')
@section('title','Login - Swift')

@section('content')
   <style>
      .footer-bs{
         display: none;
      }
      main{
         background-image: none !important;
      }
   </style>
   <link href="{{ asset('assets/css/signup.css') }}" rel="stylesheet">
   <section id="userLogin">
         <div class="container">
            <header>SwiftDocsPro</header>

            <div class="form-outer">
               <form method="post" action="{{ route('login.perform') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  <div class="page">
                     <div class="title">
                        <i style="font-size: 18px;" class="fa fa-user"></i> User Login
                     </div>
                     <br>
                     @if(isset ($errors) && count($errors) > 0)
                        <div class="alert alert-warning" role="alert">
                           <ul class="list-unstyled mb-0">
                                 @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                 @endforeach
                           </ul>
                        </div>
                     @endif

                     <div class="field">
                        <div class="label">
                           Username or Email
                        </div>
                        <input class="login-input" type="text" value="{{ old('username') }}" name="username" required="required" autofocus>                    
                     </div>

                     <div class="field mb-1">
                        <div class="label">
                           Password
                        </div>
                        <input class="login-input" type="password" name="password" required="required">
                     </div>
                     <div class="text-center pt-3">
                        <p class="mb-0">Not a member? <a href="{{ route('register.show') }}" class="text-decoration-none text-primary ml-1">Sign Up now</a></p>
                     </div>
                     <div class="field btns">
                        <button class="submit">Log In</button>
                     </div>
                  </div>
                  
               </form>
            </div>
         </div>
   </section>
@endsection



