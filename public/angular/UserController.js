app.controller('UserController',function($scope,$http,API_URL){
	$http.get(API_URL + "users").
	success(function(response){
		$scope.users = response;
	});

	$scope.view = function(data)
	{
		$scope.user = data;
		$('#myModal').modal('show');
	}



	$scope.deactive = function(id)
	{
	   
	   var isConfirm = confirm('Are you sure?');
	   	if(isConfirm)
		{
			$http.get(API_URL + "deactive" + "/" + id).
		success(function(response){
			//location.reload();
			$scope.display();
		});

    	}
			
	 }


	 $scope.active = function(id)
	{
	   var isConfirm = confirm('Are you sure?');
	   	if(isConfirm)
		{
			$http.get(API_URL + "active" + "/" + id).
		success(function(response){
			//location.reload();
			$scope.display();
		});

    	}
			
	 }

  
	$scope.display = function()
	{
		$http.get(API_URL + "users").
		success(function(response){
		$scope.users = response;
		});

	}


	

});