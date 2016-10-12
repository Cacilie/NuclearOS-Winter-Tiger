<?php

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WOS FILES</title>
    <script src="scripts/angular/angular.min.js" charset="utf-8"></script>
    <script src="scripts/angular/modules/wosFileModule.js" charset="utf-8"></script>
  </head>
  <body ng-app="filesapp" ng-controller="fileController">
    <label>Nombre nueva carpeta</label>
    <input type="text" name="name" placeholder="Nombre de la carpeta" ng-model="nuevaCarpeta.nombre">
    <button type="button" name="button" ng-click="crearCarpeta()">crear</button>



    <br>
    <br>
    <br>
    <h2>Mis carpetas</h2>
    <div class="">
      <li>
        <ul ng-repeat="f in folders">
          <a ng-href="/carpeta={{f.id}}">{{f.nombre}}</a>
        </ul>
      </li>
    </div>
  </body>
</html>
