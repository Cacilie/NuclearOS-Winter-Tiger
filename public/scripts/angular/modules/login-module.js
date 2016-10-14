var loginapp = angular.module('loginapp',[]);

loginapp.controller('loginController', ['$scope' , '$http', function($scope, $http){
  $scope.userToLog = {user:'',password:''}
  $scope.submitLogin = function()
  {
    $scope.userToLog.user = $("#nombre").html();
    $http.post('/login',$scope.userToLog)
    .success(function(data){

      if (data == 0) {
        alert("Bienvenido")
      }
      else {
        alert("Error, contraseña incorrecta")
      }

    })
  }
}]);
