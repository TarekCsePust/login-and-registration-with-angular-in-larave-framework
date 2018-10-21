@extends('layouts.master')

@section('title')
welcome page
@endsection

@section('content')

<section class="row">
		<div class="col-md-10 col-md-offset-1 fluid">
			<img src="{{route('account.image',['filename'=>Auth::user()->image])}}" alt="" style="max-height:300px;width:950px;" class="img-responsive center-block">
			<a href="{{Url('upadetimage')}}">update image</a>
		</div>
</section>

@if(Auth::user()->admin)
<div class="container">
  <div class="row">
     <div class="col-md-offset-2">
     <h2>WELCOME TO ADMIN PANEL</h2>
     </div>
  </div>
</div>
@endif
<div class="container" ng-app="register" ng-controller="UserController">
    <div class="row">
    	<div class="col-md-8 col-md-offset-2">
    
	<h2>Register users are following:</h2>
 
		 <table class="table table-striped">
    <thead>
      <tr>
      	<th>ID</th>
        <th>username</th>
        <th>info</th>
      </tr>
    </thead>
    <tbody>
      <tr ng-repeat="user in users">
        <td>@{{user.id}}</td>
        <td>@{{user.username}}</td>
        
        <td>
          
        	<button class="btn btn-primary" ng-click="view(user)">View info</button>
          </div>
        </td>
        <td>
          @if(Auth::user()->admin)
          <div ng-if="user.approved">
              <button class="btn btn-danger" ng-click="deactive(user.id)">Deactive</button>
          </div>
          <div ng-if="!user.approved">
              <button class="btn btn-primary" ng-click="active(user.id)">Active</button>
          </div>
          @endif
        </td>
      </tr>
    </tbody>
    </table>
	</div>
	</div>
  @include('includes.infomodal')
</div>
@endsection