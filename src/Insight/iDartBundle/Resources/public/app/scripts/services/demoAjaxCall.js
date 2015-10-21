
'use strict';	


srvcModule.service('demoAjaxService',['$http', '$q',function($http, $q){
	
	var requestJsonResponse = function(unit){
		var deferred = $q.defer();
		
		$http.post(Routing.generate('id_demo_angular', true), {unit:unit}).then(function(data){
			deferred.resolve(data);
		});
		
		return deferred;
	};	
	
	this.makeAnAjaxCall = function(){
		return requestJsonResponse().promise;
	};
	
}]);
	
	


	