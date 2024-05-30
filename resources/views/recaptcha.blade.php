@extends('layouts.app-master')
@section('title','Swift - reCAPTCHA')

@section('content')
    <style>
        .navbar, .footer-bs{
            display: none;
        }
    </style>
    <div class="container mt-5 pt-5" style="max-width: 500px;">
        <form method="POST" action="">
            @csrf
            <!-- Your form fields -->
            {!! NoCaptcha::display() !!}
            <button class="btn btn-primary mt-3" type="submit">Submit</button>
        </form>
        {!! NoCaptcha::renderJs() !!}
    
    </div>

@endsection
   