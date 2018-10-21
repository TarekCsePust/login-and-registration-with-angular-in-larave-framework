<div class="row">
	<div class="col-md-4 col-md-offset-4">
	  <h3>Login:</h3>
		<form action="{{route('logedin')}}" method="POST">

		<div class="form-group">
        <label for="email">Email Address:</label>
    	<input type="email" class="form-control" id="email" name="email"
    	value="{{Request::old('email')}}"
    	>
    	@if(count($errors)>0)
    	<br>
        <p style="color: red;">{{($errors->has('email'))?$errors->first('email'):''}}</p>
    	
  		</div>
  		@endif

  		 <div class="form-group">
    	 <label for="paasword">Password:</label>
    	<input type="password" class="form-control" id="password" name="password"
    	 value="{{Request::old('password')}}"
    	>
    	<br>
    	@if(count($errors)>0)
    	<p style="color: red;">{{($errors->has('password'))?$errors->first('password'):''}}</p>
    	
  		</div>
        @endif

       <input type="hidden" name="_token" value="{{Session::token()}}">
  	   <button type="submit" class="btn btn-primary">Login</button>

		</form>
	</div>
</div>