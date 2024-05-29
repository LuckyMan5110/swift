@extends('layouts.app-master')
@section('title','Swift - Upload')

@section('content')
    <style>
        .navbar, .footer-bs{
            display: none;
        }
    </style>
    <div class="container mt-5 pt-5" style="max-width: 500px;">
        <form action="{{ route('upload.file') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                {{-- <label for="file">Choose file</label> --}}
                <h1>File Uploading</h1>
                <input type="file" name="upload_file" id="upload_file" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>

@endsection
   