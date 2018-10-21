@extends('layouts.master')

@section('title')
welcome page
@endsection

@section('content')




<div class="container">
	<div class="row">
        <div class="span12">
    		<div class="" id="loginModal">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3>Have an Account?</h3>
              </div>
              <div class="modal-body">
                <div class="well">
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#login" data-toggle="tab">Login</a></li>
                    <li><a href="#create" data-toggle="tab">Create Account</a></li>
                  </ul>



                  <div id="myTabContent" class="tab-content">
                    <div class="tab-pane active in" id="login">
                   <div>

                   <div>
                      <form class="form-horizontal">
                       
                <form>
               <div class="form-group">
              <label for="email">Email Address:</label>
              <input type="email" class="form-control" id="email" name="email"
               value="{{Request::old('email')}}"
              ><br>
              <p style="color: red;">{{($errors->has('email'))?$errors->first('email'):''}}</p>
              <br>
              </div>

               <div class="form-group">
              <label for="paasword">Password:</label>
              <input type="password" class="form-control" id="password" name="password"
               value="{{Request::old('password')}}"

              >
              <br>
              <p style="color: red;">{{($errors->has('password'))?$errors->first('password'):''}}</p>
              <br>
              </div>



                       <input type="hidden" name="_token" value="{{Session::token()}}">
              <button type="submit" class="btn btn-success">Login</button>
            
               
                      
                      </form>
  
                      </div> 
                </form>               
                    </div>
                      </div>














                    <div class="tab-pane fade" id="create">

                  <div class="row">
                  <div class="col-md-6">
                    <form id="tab" class="form-horizontal" action="{{route('registration')}}" method="POST">
          
           <div class="form-group">
              <label for="username">Username:</label>
              <input type="text" class="form-control" id="username" name="username"
               value="{{Request::old('username')}}"
              >
              <br>
              <p style="color: red;">{{($errors->has('username'))?$errors->first('username'):''}}</p>
              <br>
              </div>
                        <div class="form-group">
              <label for="firstname">First Name:</label>
              <input type="text" class="form-control" id="firstname" name="firstname"
               value="{{Request::old('firstname')}}"
              >
              <br>
              <p style="color: red;">{{($errors->has('firstname'))?$errors->first('firstname'):''}}</p>
              <br>
              </div>
                         <div class="form-group">
              <label for="lastname">Last Name:</label>
              <input type="text" class="form-control" id="lastname" name="lastname"
               value="{{Request::old('lastname')}}"

              >
              <br>
              <p style="color: red;">{{($errors->has('lastname'))?$errors->first('lastname'):''}}</p>
              <br>
              </div>

               <div class="form-group">
              <label for="dob">Date of Birth:</label>
              <input type="date" class="form-control" id="dob" name="dob"

               value="{{Request::old('dob')}}"
              >
              <br>
              <p style="color: red;">{{($errors->has('dob'))?$errors->first('dob'):''}}</p>
              <br>
              </div>



                       
                         <div class="form-group">
              <label for="email">Email Address:</label>
              <input type="email" class="form-control" id="email" name="email"
               value="{{Request::old('email')}}"
              >
              <br>
              <p style="color: red;">{{($errors->has('email'))?$errors->first('email'):''}}</p>
              <br>
              </div>

               <div class="form-group">
              <label for="paasword">Password:</label>
              <input type="password" class="form-control" id="password" name="password"
               value="{{Request::old('password')}}"
              >
              <br>
              <p style="color: red;">{{($errors->has('password'))?$errors->first('password'):''}}</p>
              <br>
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
               <br>
            <p style="color: red;"> {{($errors->has('address'))?$errors->first('address'):''}}</p>
              <br>
              </div>
                   <input type="hidden" name="_token" value="{{Session::token()}}">
     



                        <div>
                          <button type="submit" class="btn btn-primary">Create Account</button>
                        </div>
                      </form>
                      </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
        </div>
	</div>
</div>

@endsection