@extends('layouts.app')
@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-12">
               {{ auth()->user()->name}}
           <a href="{{route('logout')}}">Logout</a>
           </div>
       </div>
   </div>
@endsection