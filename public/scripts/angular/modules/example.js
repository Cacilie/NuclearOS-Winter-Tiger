

var welcomeapp = angular.module('welcomeapp',['ui.router']);
welcomeapp.config(function($stateProvider, $urlRouterProvider){
  $urlRouterProvider.otherwise('/landing');

  $stateProvider
  .state('landing',{
    url: '/landing',
    views:{
      'content' :{
        templateUrl : 'templates/index.html',
         controller : 'registerController',
      }
    }
  })
  .state('login',{
    url : '/login',
    views:{
      'content' :{
        templateUrl :'templates/signup.html',
        controller :'loginController',
      }
    }
  });
});



welcomeapp.controller('registerController',['$scope','$http',function($scope,$http){
  $scope.newUser = {nombre:'',password:'',email:''};
  $scope.enviar  = function(){
  // console.log($scope.newUser);
  $http.post('sendregister',$scope.newUser)
  .success(function(data){
    console.log(data);
    if(data == 202){

      swal("Ese correo ya existe!")
        $scope.newUser = {};
    }else{
      // swal("Cuenta creada correctamente")
      window.location ="/#/login"
    }
  })
  .error(function(err){
    console.log(500);
  });
}
}]);


welcomeapp.controller('loginController',['$scope','$http',function($scope,$http){
$scope.tryUser ={email:'',password:''}
$scope.logear = function(){
  $http.post('access',$scope.tryUser)
  .success(function(data){
    if(data == 404){
      swal("Fijate bien en tus datos!")
    }else{
      window.location ="/my_profile"
    }
  })
  .error(function(){
    console.log(500);

  })
}
}]);
