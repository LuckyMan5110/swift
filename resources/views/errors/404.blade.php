@extends('errors::minimal')

<div id="global-loader">
    <div class="loader-text">
        <h1 class="text-center">SWIFT DOCS PRO</h1>
    </div>
    <img src="{{ asset('assets/image/loader.svg') }}" class="loader-img" alt="Loader">
</div>

<div class="page">
   <!-- PAGE-CONTENT OPEN -->
    <div class="page-content error-page">
        <div class="container text-center">
            <div class="error-template">
                <h1 class="display-1 floating text-white mb-2">404</h1>
                <h5 class="error-details text-white">
                    Sorry, an error has occured, Requested page not found!
                </h5>
                <div class="text-center">
                    <a class="btn btn-primary-light mt-5 mb-5" href="/"> <i class="fa fa-long-arrow-left"></i> Back to Home </a>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGE-CONTENT OPEN CLOSED -->
</div>

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
