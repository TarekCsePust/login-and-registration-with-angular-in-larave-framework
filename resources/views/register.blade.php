@extends('layouts.master')

@section('title')
welcome page
@endsection

@section('content')
   <div class="container">
      <div class="row">
      <div class="col-md-6 col-md-offset-3">
	  @if(session()->has('message'))
     <div class="alert alert-success alert-dismissable">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
     <strong>{{session()->get('message')}}</strong>
      </div>
     @endif
     </div>
     </div>
 </div>

 <div class="container">
    <div class="row">
 	@include('includes.reg')
 	</div>
 </div>
 @endsection