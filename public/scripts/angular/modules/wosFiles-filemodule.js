var filesapp = angular.module('filesapp',[]);
filesapp.controller('fileController',['$scope','$http',function($scope,$http){
  $scope.autorun = function(){

    setInterval(function(){
    $http.post('/getFilesByFolder',{})
    .success(function(data){

      $scope.files = data;
    })
    .error(function(err){
      return err;
    })},1000);
  }
  $scope.autorun();
  $scope.nuevoArchivo = {nombre:''}
  $scope.crearArchivo= function()
  {
    $http.post('/createNewFile',$scope.nuevoArchivo)
    .success(function(data){
      if(data == 1)
      {
        alert("El archivo ya existe")
      }
      else {
        alert("Archivo creado exitosamente")
      }
    })
  }
}])
