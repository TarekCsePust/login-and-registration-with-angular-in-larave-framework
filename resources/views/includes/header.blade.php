<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      
      <a class="navbar-brand" href="#">Login and Regitration Site</a>
          
    </div>
    
    <ul class="nav navbar-nav navbar-right">
       @if(!Auth::check())
      <li><a href="{{Url('login')}}"><span class=""></span>Login</a></li>
      <li><a href="{{Url('register')}}"><span class="glyphicon glyphicon-registration-mark"></span>Register</a></li> 
      @else
      <li><a href="{{Url('home')}}"><span class="glyphicon glyphicon-home"></span>Home</a></li>
      <li><a href="{{Url('account')}}"><span class="glyphicon glyphicon-user"></span>My Account</a></li>
      <li><a href="{{Url('logout')}}"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      @endif
    </ul>
  </div>
</nav>