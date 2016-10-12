<?php
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Files by FOLDER</title>
    <script src="scripts/angular/angular.min.js" charset="utf-8"></script>
    <script src="scripts/angular/modules/wosFiles-filemodule.js" charset="utf-8"></script>
  </head>
  <body ng-app="filesapp" ng-controller="fileController">
    <label>Nombre nueva carpeta</label>
    <input type="text" name="name" placeholder="Nombre del archivo" ng-model="nuevoArchivo.nombre">
    <button type="button" name="button" ng-click="crearArchivo()">crear</button>
    <br>
    <br>
    <br>
    <h3>Archivo</h3>
    <li>
      <ul ng-repeat="f in files">
        <a href="#">{{f.nombre}}</a>
      </ul>
    </li>
  </body>
</html>
