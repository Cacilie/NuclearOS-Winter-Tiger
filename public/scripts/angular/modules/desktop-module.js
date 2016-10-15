var desktopapp = angular.module('desktopapp', []);
desktopapp.controller('deskController', ['$scope', '$http', function($scope,$http){
  $scope.abrirChrome = function()
  {
    window.open('http://www.google.com','','width=1000,height=600');
  }

  $scope.abrirTraductor = function()
  {
    window.open('http://translate.google.com/?hl=es','','width=1000,height=600');
  }

  $scope.abrirGmail = function()
  {
    window.open('https://mail.google.com','','width=1000,height=600');
  }

  $scope.abrirFacebook = function()
  {
    window.open('https://facebook.com','','width=1000,height=600');
  }

  $scope.abrirTwitter = function()
  {
    window.open('https://twitter.com','','width=1000,height=600');
  }

  $scope.abrirInstagram = function()
  {
    window.open('https://www.instagram.com','','width=1000,height=600');
  }

  $scope.abrirSpotify = function()
  {
    window.open('https://play.spotify.com','','width=1000,height=600');
  }


  $scope.abrirOutlook = function()
  {
    window.open('https://www.outlook.com','','width=1000,height=600');
  }

  $scope.cambiarUsuario = function()
  {
    console.log("Entre");
    window.location = "/"
  }
}]);

desktopapp.controller('modalController',['$scope','$http',function($scope,$http){
  $scope.autorun = function(){

    setInterval(function(){
    $http.post('/getMyFolders',{})
    .success(function(data){

      $scope.folders = data;
      //console.log(data);
    })
    .error(function(err){
      return err;
    })
  },1000);
  }
  $scope.autorun();


  $scope.getFilesByFolder = function(id)
  {
    $(".form_archivo").show();
    $scope.file = {id:id}
    $http.post('/getFilesByFolder',$scope.file)
    .success(function(data){
      $scope.files = data;
      //console.log(data);
    })
    .error(function() {
      console.log(1);
    });
  }

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
        $scope.getFilesByFolder(0);
      }
      $scope.nuevoArchivo = {nombre:''}
    })
  }

  $scope.folderA_Eliminar = {id:''}
  $scope.eliminarFolder = function(id)
  {
    $scope.folderA_Eliminar.id = id;
    $http.post('/deleteFolder',$scope.folderA_Eliminar)
    .success(function(data){
      alert("Se trasladó a la papelera (Cambiarlo por toast :P)")
      $scope.getFilesByFolder(0);

    })
    .error(function(err){
      console.log(Err);
    })
  }

  $scope.fileA_Eliminar = {id : ''}
  $scope.eliminarFile = function(id)
  {
    $scope.fileA_Eliminar.id = id;
    $http.post('/deleteFile',$scope.fileA_Eliminar)
    .success(function(data){
      alert("Se trasladó a la papelera (Cambiarlo por toast :P)")
      $scope.getFilesByFolder(0);
    })
    .error(function() {
      console.log("Error");
    });
  }

}]);
