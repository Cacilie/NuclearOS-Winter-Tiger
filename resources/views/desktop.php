<!DOCTYPE html>
  <html >
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="materialize/css/estilos.css"  media="screen,projection"/>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js"></script>
        <script  type="text/javascript" src="scripts\calendario\ng_all.js"></script>
        <script  type="text/javascript" src="scripts\calendario\components\calendar.js"></script>
        <script src="scripts/angular/angular.min.js" charset="utf-8"></script>
        <script src="scripts/angular/modules/desktop-module.js" charset="utf-8"></script>
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
        <script src="scripts/jquery.mousewheel-min.js"></script>
        <script src="scripts/jquery.terminal-src.js"></script>
        <script src="scripts/jquery.terminal.min.js"></script>
        <script src="scripts/star_wars.js"></script>
        <script src="ace/src-noconflict/ace.js" charset="utf-8"></script>
        <link href="materialize/css/jquery.terminal.css" rel="stylesheet"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    </head>


        <ul id="slide-out" class="side-nav fixed pink darken-4 ">
          <li><div class="userView" align="center">
            <img class="background" src="source/bgprofile.jpg">
             <img class="materialboxed circle" width="650" src="source/user1.jpg">
            <a href="#!name"><span class="white-text name">Usuario 1</span></a>
            <a href="#!"><span class="white-text">Edit</span></a>
             </div></li>
             <div class="pink darken-4">
               <li>
                 <nav class="pink darken-4">
                <div class="nav-wrapper">
                  <form>
                    <div class="input-field">
                      <input id="search" type="search">
                      <label for="search"><i class="material-icons">search</i></label>
                      <i class="material-icons">close</i>
                    </div>
                  </form>
                </div>
              </nav>
             </li>
             <li><a class="waves-effect white-text modal-trigger" href="#modal1"><i class="material-icons white-text">insert_drive_file</i>Archivos</a></li>
             <li class="no-padding">
       <ul class="collapsible collapsible-accordion">
         <li>
           <a class="collapsible-header white-text waves-effect">Mensajes<i class="material-icons white-text">messages</i></a>
           <div class="collapsible-body">
             <ul>
               <li><a class="waves-effect waves-purple" href="#!">Usuario 1<span class="badge">1</span></a></li>
               <li><a class="waves-effect waves-purple" href="#!">Usuario 2<span class="new badge pink darken-4 white-text">1</span></a></li>
               <li><a class="waves-effect waves-purple" href="#!">Group</a></li>
             </ul>
           </div>
         </li>
       </ul>
     </li>
              <li><a class="waves-effect white-text modal-trigger" href="#modal4"><i class="material-icons white-text">settings_applications</i>Panel de Control</a></li>
              <li><a class="waves-effect white-text modal-trigger" href="#modal3"><i class="material-icons white-text">call_to_action</i>Terminal</a></li>
              <li><a class="waves-effect white-text modal-trigger" href="#modal2"><i class="material-icons white-text">delete_sweep</i>Papelera</a></li>
              <li><a class="waves-effect white-text modal-trigger" href="#modalArtisan"><i class="material-icons white-text">code</i>Artisan ACE</a></li>

         </div>
  <footer class="page-footer pink darken-4" ng-app="desktopapp" ng-controller="deskController">
        <div class="container">
          <div class="row">
            <div class="col l12 s12">
              <center><h5 class="white-text">Nuclear Apps</h5></center>
              <table align="center">
                <tr>
                  <td><center><img class="tooltipped" data-position="top" data-delay="100" data-tooltip="Google" id="chrome" src="source/iconos/chrome.png" alt="" ng-click="abrirChrome()"></center></td>
                  <td><center><img class="tooltipped" data-position="top" data-delay="100" data-tooltip="Traductor" id="translate" src="source/iconos/traductor.png" alt="" ng-click="abrirTraductor()"></center></td>
                  <td><center><img class="tooltipped" data-position="top" data-delay="100" data-tooltip="Gmail" id="gmail" src="source/iconos/gmail.png" alt="" ng-click="abrirGmail()"></center></td>
                </tr>
                <tr>
                  <td><center><img class="tooltipped" data-position="top" data-delay="100" data-tooltip="Facebook" id="fb" src="source/iconos/facebook.png" alt="" ng-click="abrirFacebook()"></center></td>
                  <td><center><img class="tooltipped" data-position="top" data-delay="100" data-tooltip="Twitter" id="twitter" src="source/iconos/twitter.png" alt="" ng-click="abrirTwitter()"></center></td>
                  <td><center><img class="tooltipped" data-position="top" data-delay="100" data-tooltip="Instagram" id="instagram" src="source/iconos/instagram.png" alt="" ng-click="abrirInstagram()"></center></td>
                </tr>
                <tr>
                  <td><center><img class="tooltipped" data-position="top" data-delay="100" data-tooltip="Spotify" id="spotify" src="source/iconos/spotify.png" alt="" ng-click="abrirSpotify()"></center></td>
                  <td><center><img class="tooltipped" data-position="top" data-delay="100" data-tooltip="Outlook" id="outlook" src="source/iconos/outlook.png" alt="" ng-click="abrirOutlook()"></center></td>
                  <td><img src="" alt=""></td>
                </tr>
              </table>
            </div>

          </div>
          <div class="row">
            <ul class=" ">
              <li><a class="waves-effect fecha white-text modal-trigger" href="#modalCalendar" onclick="Funcion()">Calendario</a></li>
            </ul>
          </div>
        </div>
        <div class="footer-copyright pink-darken-3">
          <div class="container" align="center">
          © 2016 D'tim
          </div>
        </div>
        <li  ><a class="waves-effect waves-light btn  pink darken-3 white-text" ng-click="cambiarUsuario()"><i class="material-icons white-text" >power_settings_new</i>Cambiar Usuario</a></li>
      </footer>



     </ul>
      <body ng-app="desktopapp" ng-controller="modalController">
        <style media="screen">
        #draggable
        {
          z-index: 10;
        }

        body {
          /* Ubicación de la imagen */
 background-image: url(source/bgdesktop.jpg);

 /* Nos aseguramos que la imagen de fondo este centrada vertical y
   horizontalmente en todo momento */
 background-position: center center;

 /* La imagen de fondo no se repite */
 background-repeat: no-repeat;

 /* La imagen de fondo está fija en el viewport, de modo que no se mueva cuando
    la altura del contenido supere la altura de la imagen. */
 background-attachment: fixed;

 /* La imagen de fondo se reescala cuando se cambia el ancho de ventana
    del navegador */
 background-size: cover;

 /* Fijamos un color de fondo para que se muestre mientras se está
   cargando la imagen de fondo o si hay problemas para cargarla  */
 background-color: #464646;
          }

          #modal1 {
  bottom:  auto !important;
  right: auto !important;
  top: 15%;
  left:32%;
}
          #modal2 {
bottom:  auto !important;
right: auto !important;
top: 15%;
left:32%;
}
          #modal3 {
bottom:  auto !important;
right: auto !important;
top: 15%;
left:32%;
}

li.collection-item {
    cursor: pointer;
    cursor: hand;
}

i.icon-yellow {
    color: #D1D126;
}
i.icon-red {
    color: #c62828;
}
i.icon-pink {
    color: #880e4f;
}
#editor {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
    }

        </style>


<!-- Modal Structure -->
<div id="modal1" class="modal modal-fixed-footer">
  <div class="modal-header">
    <div class="modal-content">
      <div class="row valign-wrapper">
        <div class="col 2">
          <img src="source/iconos/cardinal1.png" width="35px">
        </div>
        <div class="col 10 ">
          <h5>Cardinal</h5>
        </div>
      </div>
    <div class="row">
      <div class="col 4">
        <h6>Carpetas</h6>
        <div class="row valign-wrapper">
          <div class="col 10 valign">
          <input type="text" name="nombre_carpeta" ng-model="nuevaCarpeta.nombre" placeholder="Nueva Carpeta">
          </div>
          <div class="col 2 valign">
            <a class="btn-floating btn-small waves-effect waves-light green darken-4" ng-click="crearCarpeta()"><i class="material-icons">add</i></a>
          </div>
        </div>
        <ul class="collection">
          <li class="collection-item" ng-repeat="folder in folders" >
            <i class="material-icons icon-yellow"  ng-click="getFilesByFolder(folder.id)">folder</i>
            <span class="title" style="margin-left: 10px" ng-click="getFilesByFolder(folder.id)">{{folder.nombre}}</span>
            <a href="#!" class="secondary-content " ng-click="eliminarFolder(folder.id)"><i class="material-icons icon-red">delete</i></a>
          </li>
        </ul>
      </div>
      <div class="col 6 offset-s2">
        <h6>Archivos </h6>
        <div class="row valign-wrapper form_archivo" style="display: none;">
          <div class="col 10 valign">
            <input type="text" name="nombre_archivo" class="form_archivo" ng-model="nuevoArchivo.nombre" placeholder="Nuevo Archivo">
          </div>
          <div class="col 2 valign">
            <a class="btn-floating btn-small waves-effect waves-light green darken-4" ng-click="crearArchivo()"><i class="material-icons">add</i></a>
          </div>
        </div>
        <ul class="collection form_archivo" style="display: none;">
          <li class="collection-item" ng-repeat="file in files">
            <i class="material-icons icon-pink">insert_drive_file</i>
            <span class="title" style="margin-left: 10px">{{file.nombre}}</span>
            <a href="#!" class="secondary-content" ng-click="eliminarFile(file.id)"><i class="material-icons icon-red" >close</i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="modal-footer">
<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
</div>

</div>

<!-- Estructura del Modal 2 para la Papelera -->
<div id="modal2" class="modal modal-fixed-footer">
  <div class="modal-header">
    <div class="modal-content">
      <div class="row valign-wrapper">
        <div class="col 2">
          <img src="source/iconos/cardinal1.png" width="35px">
        </div>
        <div class="col 10 ">
          <h5>Cardinal</h5>
        </div>
      </div>
    <div class="row">
      <div class="col 4">
        <h6>Carpetas</h6>
        <div class="row valign-wrapper" style="display:none">
          <div class="col 10 valign">
          <input type="text" name="nombre_carpeta" ng-model="nuevaCarpeta.nombre" placeholder="Nueva Carpeta">
          </div>
          <div class="col 2 valign">
            <a class="btn-floating btn-small waves-effect waves-light green darken-4" ng-click="crearCarpeta()"><i class="material-icons">add</i></a>
          </div>
        </div>

        <ul class="collection">
          <li class="collection-item " ng-repeat="folder in Trashfolders" >
            <i class="material-icons icon-yellow"  ng-click="getTrashFilesByFolder(folder.id)">folder</i>
            <span class="title" style="margin-left: 10px" ng-click="getTrashFilesByFolder(folder.id)">{{folder.nombre}}</span>
            <a href="#!" class="secondary-content" ng-click="eliminarTrashFolder(folder.id)"><i class="material-icons icon-red">delete</i></a>
            <a href="#!" class="secondary-content" ng-click="restaurarTrashFolder(folder.id)"><i class="material-icons icon-red">settings_backup_restore</i></a>
          </li>
        </ul>
      </div>
      <div class="col 2 offset-s1">
        <h6>Archivos por folder</h6>
        <!--
        <div class="row valign-wrapper form_archivo" style="display: none;">
          <div class="col 10 valign">
            <input type="text" name="nombre_archivo" class="form_archivo" ng-model="nuevoArchivo.nombre" placeholder="Nuevo Archivo">
          </div>
          <div class="col 2 valign">
            <a class="btn-floating btn-small waves-effect waves-light green darken-4" ng-click="crearArchivo()"><i class="material-icons">add</i></a>
          </div>
        </div>
      -->
        <ul class="collection form_archivo" style="display: none;">
          <li class="collection-item" ng-repeat="file in Trashfiles">
            <i class="material-icons icon-pink">insert_drive_file</i>
            <span class="title" style="margin-left: 10px">{{file.nombre}}</span>
            <a href="#!" class="secondary-content" ng-click="eliminarTrashFile(file.id)"><i class="material-icons icon-red" >close</i></a>
            <a href="#!" class="secondary-content" ng-click="restaurarTrashFile(file.id)"><i class="material-icons icon-red" >settings_backup_restore</i></a>

          </li>
        </ul>
      </div>

      <div class="col 2 offset-s1">
        <h6>Todos mis Archivos</h6>
        <ul class="collection form_archivo" >
          <li class="collection-item" ng-repeat="afile in allTrashfiles">
            <i class="material-icons icon-pink">insert_drive_file</i>
            <span class="title" style="margin-left: 10px">{{afile.nombre}}</span>
            <a href="#!" class="secondary-content" ng-click="eliminarTrashFile(afile.id)"><i class="material-icons icon-red" >close</i></a>
            <a href="#!" class="secondary-content" ng-click="restaurarTrashFile(afile.id)"><i class="material-icons icon-red" >settings_backup_restore</i></a>

          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div class="modal-footer">
<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
</div>
</div>

<!--Estructura Terminal-->
<div id="modal3" class="modal modal-fixed-footer">
  <div class="modal-header">
    <div class="modal-content">
    <div class="row valign-wrapper">
      <div class="col 2 valign">
        <i class="material-icons pink-text text-darken-4">call_to_action</i>
      </div>
      <div class="col 10 valign">
        <h5>Reactor Nuclear</h5>
      </div>
    </div>
<div id="term_demo" style="margin-left: 00px; margin-top: 25px">

</div>

</div>
<div class="modal-footer">
<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
</div>
</div>
</div>


<div id="modalArtisan" class="modal modal-fixed-footer">
  <div class="modal-header">
    <div class="modal-content">
    <div class="row valign-wrapper">
      <div class="col 2 valign">
        <i class="material-icons pink-text text-darken-4">code</i>
      </div>
      <div class="col 10 valign">
        <h5>Artisan ACE</h5>
      </div>
    </div>
    <div id="editor"> console.log("Hola Nuclear")</div>

</div>
<div class="modal-footer">
<a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
</div>
</div>
</div>

<!--modal calendar-->
<div id="modalCalendar" class="modal modal-fixed-footer">
  <div class="modal-header">
    <div class="modal-content">
      <div class="row valign-wrapper">
        <div class="col 2 valign">
          <i class="material-icons pink-text text-darken-4"></i>
        </div>
        <div class="col 10 valign">
          <h5>Calendario</h5>
        </div>
      </div>
      <div id="nl_cal_div">

      </div>

    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
    </div>
  </div>
</div>
<!--contral -->
<div id="modal4" class="modal modal-fixed-footer">
  <div class="modal-header">
    <div class="modal-content">
      <div class="row valign-wrapper">
        <div class="col 2">
          <img src="source/iconos/cardinal1.png" width="35px">
        </div>
        <div class="col 10 ">
          <h5>Panel de control</h5>
        </div>
      </div>
      <div class="row">
        <div class="col 12">
           <ul class="collapsible" data-collapsible="accordion" style="width: 300%">
            <li>
              <div class="collapsible-header"><i class="material-icons">settings</i>Ajuste de Privilegios</div>
              <div class="collapsible-body">
                <ul class="collection">
                  <li class="collection-item">
                    <div class="row valign-wrapper">
                      <div class="col 9 valign">
                        <p>Usuario 2</p>
                      </div>
                      <div class="col 3 valign">
                        <div class="switch">
                          <label>
                            Off
                            <input type="checkbox" id="permiso_1" ng-model="permiso_1" ng-click="cambiarPrivilegio(2)">
                            <span class="lever"></span>
                            On
                          </label>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li class="collection-item">
                    <div class="row valign-wrapper">
                      <div class="col 9 valign">
                        <p>Usuario 3</p>
                      </div>
                      <div class="col 3 valign">
                        <div class="switch">
                          <label>
                            Off
                            <input type="checkbox" id="permiso_2" ng-model="permiso_2" ng-click="cambiarPrivilegio(3)">
                            <span class="lever"></span>
                            On
                          </label>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat ">Cerrar</a>
  </div>
</div>

      </body>
      <!--Import jQuery before materialize.js-->

      <script>
      $(document).ready(function(){
    $('.collapsible').collapsible({
      accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });
  });

      $('.modal-trigger').leanModal({
          opacity: 0 // Opacity of modal background
        }
      );

      $( function() {
      $( "#modal1" ).draggable({handle: ".modal-header"});
      $( "#modal2" ).draggable({handle: ".modal-header"});
      $( "#modal3" ).draggable({handle: ".modal-header"});
      $( "#modalArtisan" ).draggable({handle: ".modal-footer"});

      } );
      $("#chrome").click(function(e){
      $("#chrome").fadeOut(250);
      $("#chrome").fadeIn(250);
      });
      $("#translate").click(function(e){
      $("#translate").fadeOut(250);
      $("#translate").fadeIn(250);
      });
      $("#gmail").click(function(e){
      $("#gmail").fadeOut(250);
      $("#gmail").fadeIn(250);
      });
      $("#fb").click(function(e){
      $("#fb").fadeOut(250);
      $("#fb").fadeIn(250);
      });
      $("#twitter").click(function(e){
      $("#twitter").fadeOut(250);
      $("#twitter").fadeIn(250);
      });
      $("#instagram").click(function(e){
      $("#instagram").fadeOut(250);
      $("#instagram").fadeIn(250);
      });
      $("#spotify").click(function(e){
      $("#spotify").fadeOut(250);
      $("#spotify").fadeIn(250);
      });
      $("#outlook").click(function(e){
      $("#outlook").fadeOut(250);
      $("#outlook").fadeIn(250);
      });
      $('.button-collapse').sideNav({
    menuWidth: 400, // Default is 240
    edge: 'right', // Choose the horizontal origin
    closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
    );
      </script>

      <script type="text/javascript">
   jQuery(function($, undefined) {
    $('#term_demo').terminal(function(command, term) {
        if (command !== '') {
            try {
                var result = window.eval(command);
                if (result !== undefined) {
                    term.echo(new String(result));
                }
            } catch(e) {
                term.error(new String(e));
            }
        } else {
           term.echo('');
        }
    }, {
        greetings: 'Javascript Interpreter',
        name: 'js_demo',
        height: 500,
        prompt: 'js> '
    });
});
    </script>


    <script>
    var editor = ace.edit("editor");
    editor.setTheme("ace/theme/monokai");
    editor.getSession().setMode("ace/mode/javascript");
</script>
      </html>
