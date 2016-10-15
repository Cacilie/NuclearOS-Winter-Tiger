var filesapp = angular.module('filesapp',[]);
filesapp.controller('fileController',['$scope','$http',function($scope,$http){


  $scope.autorun = function(){

    setInterval(function(){
    $http.post('/getMyFolders',{})
    .success(function(data){

      $scope.folders = data;
      //console.log(data);
    })
    .error(function(err){
      return err;
    })},1000);
  }
  $scope.autorun();




  $scope.nuevaCarpeta = {nombre:''}
  $scope.crearCarpeta = function()
  {
    $http.post('/createNewFolder',$scope.nuevaCarpeta)
    .success(function(data){
      
      if(data == 0)
      {
        alert("Carpeta creada");
      }else{
        alert("La carpeta ya existe");
      }

      $scope.nuevaCarpeta = {nombre:''};
    })
    .error(function(e){
      return err;
    })
  }
}]);
