

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">User information:</h4>
        </div>
        <div class="modal-body">
          <table class="table table-striped">
          	  <tr>
          	  	<td>Firstname:</td>
          	  	<td>@{{user.firstname}}</td>
          	  </tr>
          	   <tr>
          	  	<td>Lastname:</td>
          	  	<td>@{{user.lastname}}</td>
          	  </tr>
          	   <tr>
          	  	<td>Email:</td>
          	  	<td>@{{user.email}}</td>
          	  </tr>
          	   <tr>
          	  	<td>Address:</td>
          	  	<td>@{{user.address}}</td>
          	  </tr>
          </table>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
