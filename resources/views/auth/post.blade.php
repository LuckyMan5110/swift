@extends('layouts.app-master')
@section('title','Feedback list')

@section('content')
   <style>
      .footer-bs{
         display: none;
      }
      main{
         background-image: none !important;
      }
   </style>
   <link href="{{ asset('assets/css/post.css') }}" rel="stylesheet">
   <!-- ROW OPEN -->
   <div class="post container">
      <div class="row row-cards">
         <div class="mt-1">
            <ul class="pagination float-right">
               {!! $posts->links() !!}
            </ul>
         </div>
         <div class="card mb-3">
            <div class="card-header border-bottom-0 p-4">
               <div class="page-options d-flex float-right">
                  <h3 class="card-title">Feedback List</h3>
                  {{-- <select class="form-control custom-select w-auto">
                     <option value="asc">Latest</option>
                     <option value="desc">Oldest</option>
                  </select> --}}
               </div>
            </div>
            <div class="e-table mb-3">
               <div class="table-responsive table-lg br-bl-10 br-br-10">        
                  <table class="table table-bordered mb-0">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Phone Number</th>
                           <th>Message</th>
                           <th>Send Date</th>
                           <th class="text-center">Delete</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($posts as $post)
                           <tr>
                              <td class="text-nowrap align-middle">{{ $post->name }}</td>
                              <td class="text-nowrap align-middle">{{ $post->email }}</td>
                              <td class="text-nowrap align-middle">{{ $post->phone_number }}</td>
                              <td class="text-nowrap align-middle">{{ $post->message }}</td>
                              <td class="text-nowrap align-middle">{{ $post->created_at }}</td>
                              <td class="text-center align-middle">
                                 <div class="btn-group align-top">
                                    <form action="{{ route('post.destroy', $post->id) }}" method="Post">
                                       @csrf
                                       @method('DELETE')
                                       <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                 </div>
                              </td>
                           </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
         
      </div>
   </div>
   <!-- ROW CLOSED -->

@endsection