var desktopapp = angular.module('desktopapp', []);
desktopapp.controller('deskController', ['$scope', '$http', function($scope,$http){
  $scope.abrirChrome = function() // this launch google
  {
    window.open('http://www.google.com','','width=1000,height=600');
  }

  $scope.abrirTraductor = function() // this launch google translator
  {
    window.open('http://translate.google.com/?hl=es','','width=1000,height=600');
  }

  $scope.abrirGmail = function() // this launch gmail
  {
    window.open('https://mail.google.com','','width=1000,height=600');
  }

  $scope.abrirFacebook = function()  // this launch facebook
  {
    window.open('https://facebook.com','','width=1000,height=600');
  }

  $scope.abrirTwitter = function() // this launch Twitter
  {
    window.open('https://twitter.com','','width=1000,height=600');
  }

  $scope.abrirInstagram = function() // this launch Instagram
  {
    window.open('https://www.instagram.com','','width=1000,height=600');
  }

  $scope.abrirSpotify = function() // this launch Spotify
  {
    window.open('https://play.spotify.com','','width=1000,height=600');
  }


  $scope.abrirOutlook = function() // this launch Microsoft Outlook
  {
    window.open('https://www.outlook.com','','width=1000,height=600');
  }

  $scope.cambiarUsuario = function() // this switch the user
  {
    console.log("Entre");
    window.location = "/"
  }
}]);

desktopapp.controller('modalController',['$scope','$http',function($scope,$http){



  $scope.autorun = function(){  //this function execute the process that check the files status
 
    setInterval(function(){  

    $http.post('/getMyFolders',{})  // here we get all the folders which status is 1
    .success(function(data){

      $scope.folders = data;    //if the ajax is successfull, we save the data that te server returns in $scope.folders
      //console.log(data);
    })
    .error(function(err){
      return err;
    })
    $http.post('/getMyTrashFolders',{})  // here we get all the folders which status is 0
    .success(function(data){

      $scope.Trashfolders = data;   //if the ajax is successfull, we save the data that te server returns in $scope.folders
      //console.log(data);
    })
    .error(function(err){
      return err;
    })
    $http.post('/getTrashFilesByFolder',{id:-1})  // this post het all the trashfiles, as you see,we sent -1 as parameter,
    .success(function(data){
      $scope.allTrashfiles = data;    // the -1 tell the server that we all all the trashfiles
    })
    .error(function() {
      console.log(1);
    });

  },1000);
  }
  $scope.autorun();

  $scope.restaurarTrashFolder = function(id)
  {
    $http.post('/restoreFolder',{id:id}) // in this post, the id is sent to the server in order to restore a certain folder and all the files in it
    .success(function(data){
      if(data == 0)  // Terrific! if the server return 0, the file has been restore without trouble
      {
        Materialize.toast('Carpeta restaurada.', 4250)
      }else{
        Materialize.toast('No tiene permisos para restaurar.', 4250) // if the server return != 0, it means that you dont have the level to restore
      }
    })
  } 

/*
restaruarTrashFile gets the id as a parameter and send it to the server in order to restore a certain file
*/
  $scope.restaurarTrashFile = function(id)
  {
    $http.post('/restoreFile',{id:id})
    .success(function(data){
      if(data == 0)
      {
        Materialize.toast('Carpeta restaurada.', 4250)
      }else{
        Materialize.toast('No tiene permisos para restaurar.', 4250)
      }
    })
  }
/*
getFilesByFolder get the files based on a parameter
*/

  $scope.getFilesByFolder = function(id)
  {
    $(".form_archivo").show(); //this means that the input used to introduce a new file will be only displayed if the function is fire.
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

/*
getTrashFiesByFolder get the files based on a parameter.
*/
    $scope.getTrashFilesByFolder = function(id)
    {
      $(".form_archivo").show();
      $scope.file = {id:id}
      $http.post('/getTrashFilesByFolder',$scope.file)
      .success(function(data){
        $scope.Trashfiles = data;
        //console.log(data);
      })
      .error(function() {
        console.log(1);
      });
    }

/*
In order to crear a new folder it is necessary the name of the folder.
*/
  $scope.nuevaCarpeta = {nombre:''}
  $scope.crearCarpeta = function()
  {
    $http.post('/createNewFolder',$scope.nuevaCarpeta)  // here the name is sent to the server
    .success(function(data){

      if(data == 0)   //if the server returns 0, the folder was successful created
      {
        Materialize.toast('Carpeta creada.', 4250)
      }else{                                 
        Materialize.toast('La carpeta ya existe.', 4250)
      }

      $scope.nuevaCarpeta = {nombre:''};
    })
    .error(function(e){
      return err;
    })
  }

  $scope.nuevoArchivo = {nombre:''} // this contains the name of the new file
  $scope.crearArchivo= function()
  {
    $http.post('/createNewFile',$scope.nuevoArchivo) // here the name is sent to the server
    .success(function(data){
      if(data == 1) 
      {
        Materialize.toast('El archivo ya existe', 4250)
      }
      else {
        Materialize.toast('Creación existosa.', 4250)
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
      if(data == 0)
      {
        Materialize.toast('Se traslado a la papelera', 4250)
      }else {
        Materialize.toast('Permisos insuficientes', 4250)
      }

      $scope.getFilesByFolder(0);

    })
    .error(function(err){
      console.log(Err);
    })
  }

  $scope.TrashfolderA_Eliminar = {id:''}
  $scope.eliminarTrashFolder = function(id)
  {
    $scope.TrashfolderA_Eliminar.id = id;
    $http.post('/deleteTrashFolder',$scope.TrashfolderA_Eliminar)
    .success(function(data){
      if(data == 0)
      {
        Materialize.toast('Se eleminó permanentemente.', 4250)
      }else {
        Materialize.toast('No tiene permisos.', 4250)
      }

      $scope.getTrashFilesByFolder(0);

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
      if(data == 0)
      {
        Materialize.toast('Se traslado a la papelera', 4250)
      }else {
        Materialize.toast('Permisos insuficientes', 4250)
      }


      $scope.getFilesByFolder(0);
    })
    .error(function() {
      console.log("Error");
    });
  }
  $scope.TrashfileA_Eliminar = {id : ''}
  $scope.eliminarTrashFile = function(id)
  {
    $scope.TrashfileA_Eliminar.id = id;
    $http.post('/deleteTrashFile',$scope.TrashfileA_Eliminar)
    .success(function(data){

      if(data == 0)
      {
        Materialize.toast('Se eliminó permanentemente.', 4250)
      }else {
        Materialize.toast('Permisos insuficientes.', 4250)
      }


      $scope.getTrashFilesByFolder(0);
    })
    .error(function() {
      console.log("Error");
    });
  }


  $scope.cambiarPrivilegio = function(id)
  {
    $http.post('cambiarDerechos',{id:id})
    .success(function(data){
      console.log(data);
      if(data == 1){
        Materialize.toast('No tiene los privilegios.', 4250)
        if(id == 2)
        {
          var valor1 = document.getElementById("permiso_1").checked
          document.getElementById("permiso_1").checked = !valor1;
        }
        if(id == 3)
        {
          var valor2 = document.getElementById("permiso_2").checked
          document.getElementById("permiso_2").checked = !valor2;
        }
      }
      else {
        Materialize.toast('Privilegios actualizados.', 4250)
      }
    })
  }

/*
verificarDerechos is used to verify if an user has the  privileges to modify the permissions 
of others users.
*/

  $scope.verificarDerechos = function()
  {
    $http.post('verificarDerechos',{})
    .success(function(data){

      if(data[1].level == 0)
      {
        console.log(data[0].level);
        document.getElementById("permiso_1").checked = true;
      }
      if(data[2].level == 0)
      {
        console.log(data[2].level);
        document.getElementById("permiso_2").checked = true;
      }
    })


  }

  $scope.verificarDerechos();

}]);
