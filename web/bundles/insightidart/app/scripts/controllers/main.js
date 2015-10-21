'use strict';


demoModule.controller('MainCtrl',['$scope', 'demoAjaxService', function ($scope, demoAjaxService) {
    
	$scope.displayAjaxResponse = function(){
		
		var promise = demoAjaxService.makeAnAjaxCall();
		promise.then(function(data){
			console.log(data);			
		});
	}
	
}]);
