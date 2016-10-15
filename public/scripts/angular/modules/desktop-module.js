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
}])
