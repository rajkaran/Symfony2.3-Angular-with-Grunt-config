'use strict';


demoModule.controller('MainCtrl',['$scope', 'demoAjaxService', function ($scope, demoAjaxService) {
    
	$scope.serverResponse = '';
	
	$scope.displayAjaxResponse = function(){
		
		var promise = demoAjaxService.makeAnAjaxCall();
		promise.then(function(data){
			$scope.serverResponse = data.data.requestTimeStamp.date;			
		});
	};
	
}]);
