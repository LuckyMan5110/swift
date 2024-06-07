@extends('layouts.app-master')
@section('title','Settings - Swift')

@section('content')
   <style>
      .footer-bs{
         display: none;
      }
      main{
         background-image: none !important;
      }
   </style>
   <link href="{{ asset('assets/css/user.css') }}" rel="stylesheet">
   

   <div class="user container">
      <h1 class="h3 mb-3 text-light">Settings</h1>
      <div class="row">
            <div class="col-md-5 col-xl-4">
               <div class="card">
                  <div class="card-header">
                        <h5 class="card-title mb-0">Profile Settings</h5>
                  </div>
                  <div class="list-group list-group-flush" role="tablist">
                        <a id="account_tab" class="list-group-item list-group-item-action active" data-toggle="list" href="#account" role="tab">
                           Account
                        </a>
                        <a id="password_tab" class="list-group-item list-group-item-action" data-toggle="list" href="#password" role="tab">
                           Password
                        </a>
                  </div>
               </div>
            </div>
            <div class="col-md-7 col-xl-8">
               <div class="tab-content">
                  <div class="tab-pane fade show active" id="account" role="tabpanel">
                        <div class="card">
                           <div class="card-header">
                              <h5 class="card-title mb-0">Account info</h5>
                           </div>
                           <div class="card-body">
                              <form action="{{ route('user.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                                 @csrf
                                 @method('PUT')
                                 <input type="hidden" name="flag" value="1" />
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="inputFirstName">First name</label>
                                       <input type="text" class="form-control" name="first_name" value="{{ Auth::user()->first_name }}" placeholder="First name" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="inputLastName">Last name</label>
                                       <input type="text" class="form-control" name="last_name" value="{{ Auth::user()->last_name }}" placeholder="Last name" required>
                                    </div>
                                 </div>
                                 <div class="form-group">
                                    <label for="inputEmail4">Email</label>
                                    @if ($errors->has('email'))
                                       <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                                    @endif
                                    <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" placeholder="Email" required>
                                 </div>
                                 <div class="form-group">
                                    <label for="inputAddress">Username</label>
                                    @if ($errors->has('username'))
                                       <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                                    @endif
                                    <input type="text" class="form-control" name="username" value="{{ Auth::user()->username }}" placeholder="Username" required>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Save changes</button>
                              </form>
                           </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="password" role="tabpanel">
                     <div class="card">
                        <div class="card-header">
                           <h5 class="card-title">Password</h5>
                        </div>
                        <div class="card-body">
                           <form action="{{ route('user.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                              @csrf
                              @method('PUT')
                                 <div class="form-group">
                                    <label for="inputPasswordCurrent">Current password</label>
                                    @if ($errors->has('current_password'))
                                       <span class="text-danger text-left">{{ $errors->first('current_password') }}</span>
                                    @endif
                                    <input type="password" class="form-control" name="current_password" required>
                                 </div>
                                 <div class="form-group">
                                    <label for="inputPasswordNew">New password</label>
                                    @if ($errors->has('password'))
                                       <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                                    @endif
                                    <input type="password" class="form-control" name="password" required>
                                 </div>
                                 <div class="form-group">
                                    <label for="inputPasswordNew2">Confirm password</label>
                                    @if ($errors->has('password_confirmation'))
                                       <span class="text-danger text-left">{{ $errors->first('password_confirmation') }}</span>
                                    @endif
                                    <input type="password" class="form-control" name="password_confirmation" required>
                                 </div>
                                 <button type="submit" class="btn btn-primary">Save changes</button>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </div>
   </div>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
   <script src="{{ asset('assets/js/user.js') }}"></script>
   <script>
      $(document).ready(function(){
         var p_flag = "<?php echo session()->get('p_flag'); ?>";
         var p_flag2 = "<?php echo $errors->first('current_password'); ?>";
         var p_flag3 = "<?php echo $errors->first('password'); ?>";
         var p_flag4 = "<?php echo $errors->first('password_confirmation'); ?>";

         if (p_flag || p_flag2 || p_flag3 || p_flag4){
            $('#password_tab').click();
         }
      });
   </script>
@endsection



