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
               <form method="post" action="{{ route('register.perform') }}">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                  
                  <div class="page slide-page" id="firstSignup">
                     <div class="alert alert-info mt-5 mb-5">
                        <strong>It is possible you are already in our system</strong><br> Please type your email to search whether a profile has already been created
                     </div>
                     <div class="title">
                        <i style="font-size: 18px;" class="fa fa-user"></i> Check Email
                     </div>
                     @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                     @endif
                     <span class="text-danger text-left" id="errorMsg" style="display: none;"></span>
                     <div class="field mb-0">
                        <div class="label">
                           Email Address
                        </div>
                        <input class="login-input" id="registerEmail" type="text" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                     </div>
                     <div class="text-center pt-3">
                        <p class="mb-0">Already have account? <a href="{{ URL('/login') }}" class="text-decoration-none text-primary ml-1">Sign In</a></p>
                     </div>
                     <div class="field">
                        <button style="font-weight: bold;" class="firstNext next">Check For My Account</button>
                     </div>
                  </div>

                  <div class="page" id="secondSignup">
                     <div class="title">
                        <i style="font-size: 18px;" class="fa fa-edit"></i> Register Account
                     </div>
                     <br>

                     {{-- @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                     @endif
                     <div class="field mb-0">
                        <div class="label">
                           Email Address
                        </div>
                        <input class="login-input" type="text" name="email" value="{{ old('email') }}" placeholder="name@example.com" required="required" autofocus>
                     </div> --}}

                     <div class="field mb-0">
                        <div class="col-md-6 pe-3">
                           <div class="label">
                              First Name
                           </div>
                           <input class="login-input" type="text" name="first_name" value="{{ old('first_name') }}" required="required">
                        </div>
                        <div class="col-md-6">
                           <div class="label">
                              Last Name
                           </div>
                           <input class="login-input" type="text" name="last_name" value="{{ old('last_name') }}" required="required">
                        </div>
                     </div>
                     @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                     @endif
                     <div class="field mb-0">
                        <div class="label">
                           Username
                        </div>
                        <input class="login-input" type="text" name="username" value="{{ old('username') }}" required="required">
                     </div>
                     <span>
                        You can log in with either your email or username
                     </span>
                     <br>
                     @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                     @endif
                     <div class="field mb-0">
                        <div class="label">
                           Password
                        </div>
                        <input class="login-input" type="password" name="password" value="{{ old('password') }}" required="required">
                     </div>
                     @if ($errors->has('password_confirmation'))
                            <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                        @endif
                     <div class="field">
                        <div class="label">
                           Confirm Password
                        </div>
                        <input class="login-input" type="password"  name="password_confirmation" value="{{ old('password_confirmation') }}" required="required">
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
   <script src="{{ asset('assets/js/register.js') }}"></script>
@endsection
            


           