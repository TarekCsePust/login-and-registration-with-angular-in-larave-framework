 <div class="row">
 <div class="col-md-4 col-md-offset-4">
 <h3>Registration:</h3>
 <form class="form-horizontal" action="{{route('registration')}}" method="POST">
              <div class="form-group">
    					<label for="username">Username:</label>
    					<input type="text" class="form-control" id="username" name="username"
    					 value="{{Request::old('username')}}"
    					>
              @if(count($errors)>0)
    					<br>
    					<p style="color: red;">{{($errors->has('username'))?$errors->first('username'):''}}</p>
    				
              @endif
  						</div>
              <div class="form-group">
    					<label for="firstname">First Name:</label>
    					<input type="text" class="form-control" id="firstname" name="firstname"
    					 value="{{Request::old('firstname')}}"
    					>
              @if(count($errors)>0)
    					<br>
    					<p style="color: red;">{{($errors->has('firstname'))?$errors->first('firstname'):''}}</p>
    					
              @endif
  						</div>
              <div class="form-group">
    					<label for="lastname">Last Name:</label>
    					<input type="text" class="form-control" id="lastname" name="lastname"
    					 value="{{Request::old('lastname')}}"
    					>
              @if(count($errors)>0)
    					<br>
    					<p style="color: red;">{{($errors->has('lastname'))?$errors->first('lastname'):''}}</p>
    				
              @endif
  						</div>

  						 <div class="form-group">
    					<label for="dob">Date of Birth:</label>
    					<input type="date" class="form-control" id="dob" name="dob"

    					 value="{{Request::old('dob')}}"
    					>
              @if(count($errors)>0)
    					<br>
    					<p style="color: red;">{{($errors->has('dob'))?$errors->first('dob'):''}}</p>
    				
              @endif
  						</div>
              <div class="form-group">
    					<label for="email">Email Address:</label>
    					<input type="email" class="form-control" id="email" name="email"
    					 value="{{Request::old('email')}}"
    					>
              @if(count($errors)>0)
    					<br>
    					<p style="color: red;">{{($errors->has('email'))?$errors->first('email'):''}}</p>
    					
              @endif
  						</div>

  						 <div class="form-group">
    					<label for="paasword">Password:</label>
    					<input type="password" class="form-control" id="password" name="password"
    					 value="{{Request::old('password')}}"
    					>
              @if(count($errors)>0)
    					<br>
    					<p style="color: red;">{{($errors->has('password'))?$errors->first('password'):''}}</p>
    					
              @endif
  						</div>

  						 <div class="form-group">
    					<label for="password">Confirmed Password:</label>
    					<input type="password" class="form-control" id="password_confirmation" name="password_confirmation"
    					 value="{{Request::old('password')}}"
    					>
    					
  						</div>

  						<div class="form-group">
    					<label for="adderss">Address:</label>
    					 <textarea value="text" name="address" rows="3" class="form-control"
    					  
    					 >
               {{Request::old('address')}}
    					 </textarea>
               @if(count($errors)>0)
    					 <br>
    				<p style="color: red;">	{{($errors->has('address'))?$errors->first('address'):''}}</p>
    				
              @endif
  						</div>
                   <input type="hidden" name="_token" value="{{Session::token()}}">
     
                        <div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>

                      </form>
                      </div>
                      </div>