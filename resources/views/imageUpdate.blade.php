@extends('layouts.master')

@section('title')
welcome page
@endsection

@section('content')
@include('includes.image')
<div class="row">
<div class="col-md-4 col-md-offset-4">
<form action="{{route('changeimage')}}" method="POST" enctype="multipart/form-data">
    <div class="form-group">
    	<label>Select Image:</label>
    	<input type="file" name="image" class="form-control">
    </div>
	<input type="hidden" name="_token" value="{{Session::token()}}">
	<input type="submit" name="change" value="submit">
</form>
</div>
</div>

@endsection