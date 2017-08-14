angular.module("cadastroDeEmpresas",["ngMessages", "ngBootbox"]);
angular.module("cadastroDeEmpresas").controller("cadastroDeEmpresasCtrl",function($scope, $http){

var context = "/desafio/Server/index.php/";



var carregarEmpresas = function(){

		$http({
		  method: 'GET',
		  url: context
		}).then(function successCallback(response) {			  
        	$scope.empresas = response.data;
			

		}, function errorCallback(response) {
		
		  }); 

	
}

$scope.adicionarEmpresa = function(empresa){
	$http({
		  method: 'POST',
		  url: context,
		  data: empresa
		}).then(function successCallback(response) {			  
			delete $scope.empresa;
			$scope.empresaForm.$setPristine();
			carregarEmpresas();

		}, function errorCallback(response) {
		
		  }); 

};

$scope.deletarEmpresa = function (empresa,index) {

		$http({
			  method: 'DELETE',
			  url: context,
			  data: empresa.id
			}).then(function successCallback(response) {
				    
			console.log("successCallback");    

			$scope.empresas.splice(index,1);	
			  }, function errorCallback(response) {
			    
			    console.log("errorCallback");
			  });
	

		

};

carregarEmpresas();

});	