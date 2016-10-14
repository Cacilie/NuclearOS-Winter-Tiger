<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
        <link type="text/css" rel="stylesheet" href="materialize/css/estilos.css"  media="screen,projection"/>


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
             <li><a class="waves-effect white-text" href="#!"><i class="material-icons white-text">insert_drive_file</i>Archivos</a></li>
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
              <li><a class="waves-effect white-text" href="#!"><i class="material-icons white-text">settings_applications</i>Panel de Control</a></li>
              <li><a class="waves-effect white-text" href="#!"><i class="material-icons white-text">call_to_action</i>Terminal</a></li>

         </div>



  <footer class="page-footer pink darken-4">
        <div class="container">
          <div class="row">
            <div class="col l12 s12">
              <h5 class="white-text">W-OS</h5>
              <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure   laborum.</p>
            </div>

          </div>
        </div>
        <div class="footer-copyright pink-darken-3">
          <div class="container" align="center">
          © 2016 D'tim
          </div>
        </div>
      </footer>

<li><a class="waves-effect waves-light btn  pink darken-3 white-text"><i class="material-icons white-text">power_settings_new</i>Cambiar Usuario</a></li>


     </ul>
      <body>
        <style media="screen">
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
        </style>


      </body>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script>
      $('.button-collapse').sideNav({
    menuWidth: 400, // Default is 240
    edge: 'right', // Choose the horizontal origin
    closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
    );
      </script>
      </html>
