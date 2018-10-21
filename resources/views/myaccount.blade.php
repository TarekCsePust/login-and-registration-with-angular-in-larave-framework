@extends('layouts.master')

@section('title')
welcome page
@endsection

@section('content')
@include('includes.image')
<div class="row">
	<div class="col-md-6 col-md-offset-3">		
      @if(session()->has('msg'))
     <div class="alert alert-success alert-dismissable">
     <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
     <strong>{{session()->get('msg')}}</strong>
      </div>
     @endif

	</div>
</div>
<div class="container">
@include('includes.updateinfo')
</div>
@endsection