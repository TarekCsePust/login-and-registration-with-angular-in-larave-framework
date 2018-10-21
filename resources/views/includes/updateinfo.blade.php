 <div class="row">
 <div class="col-md-4 col-md-offset-4">
 <h3>About You:</h3>
 <form class="form-horizontal" action="{{route('update')}}" method="POST">
              <div class="form-group">
    					<label for="username">Username:</label>
    					<input type="text" class="form-control" id="username" name="username"
    					 value="{{$user->username}}"
    					>
              @if(count($errors)>0)
    					<br>
    					<p style="color: red;">{{($errors->has('username'))?$errors->first('username'):''}}</p>
    				
              @endif
  						</div>
              <div class="form-group">
    					<label for="firstname">First Name:</label>
    					<input type="text" class="form-control" id="firstname" name="firstname"
    					 value="{{$user->firstname}}"
    					>
              @if(count($errors)>0)
    					<br>
    					<p style="color: red;">{{($errors->has('firstname'))?$errors->first('firstname'):''}}</p>
    					
              @endif
  						</div>
              <div class="form-group">
    					<label for="lastname">Last Name:</label>
    					<input type="text" class="form-control" id="lastname" name="lastname"
    					 value="{{$user->lastname}}"
    					>
              @if(count($errors)>0)
    					<br>
    					<p style="color: red;">{{($errors->has('lastname'))?$errors->first('lastname'):''}}</p>
    				
              @endif
  						</div>

  						 <div class="form-group">
    					<label for="dob">Date of Birth:</label>
    					<input type="date" class="form-control" id="dob" name="dob"

    					 value="{{$user->dob}}"
    					>
              @if(count($errors)>0)
    					<br>
    					<p style="color: red;">{{($errors->has('dob'))?$errors->first('dob'):''}}</p>
    				
              @endif
  						</div>
             
  				
  						<div class="form-group">
    					<label for="adderss">Address:</label>
    					 <textarea value="text" name="address" rows="3" class="form-control"
    					  
    					 >
               {{$user->address}}
    					 </textarea>
               @if(count($errors)>0)
    					 <br>
    				<p style="color: red;">	{{($errors->has('address'))?$errors->first('address'):''}}</p>
    				
              @endif
  						</div>
                   <input type="hidden" name="_token" value="{{Session::token()}}">
     
                        <div>
                          <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                      </form>
                      </div>
                      </div>