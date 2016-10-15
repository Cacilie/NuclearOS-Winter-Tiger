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
      <script src="scripts/angular/angular.min.js" charset="utf-8"></script>
      <script src="scripts/angular/modules/login-module.js" charset="utf-8"></script>
    </head>

    <style type="text/css">
    #bg{
      position: absolute;
      width: 100%;

      z-index: -1;
      -webkit-filter: blur(4px);
    }
      body
      {/*
        width: 100%;
        /*height: 1000000000px;
        overflow-x: hidden;
        /*
        background-image: url("source/bg.jpg");
        background-size: cover;

        transition: background 0.5s;



        background-image: url(source/bg.jpg);


        background-position: center center;


        background-repeat: no-repeat;


        background-attachment: fixed;


        background-size: cover;


        background-color: #464646;

        transition: background 0.5s;
        */
       }

      h5
      {
        color: #fff;
      }
    </style>

    <body ng-app="loginapp" ng-controller="loginController" >
      <img src="source/bg.jpg" id="bg" alt="" />
      <div class="container">
        <br><br><br><br><br><br><br><br><br>
        <div class="row" id="columna">
            <div class="col s4" id="a1">
              <div align="center">
                <img id="imagen_1" width="45%" class="responsive-img circle z-depth-5" src="source/user1.jpg">
              </div>
              <h5 align="center" id="texto_1">Usuario 1</h5>
              <div class="col s1"></div>
              <div class="input-field col s10">
                <i class="material-icons prefix">vpn_key</i>
                <input id="campo_1" type="password" class="validate ">
                <label for="icon_prefix">Contraseña</label>
              </div>
            </div>
            <div class="col s4 hide" id="b1">

            </div>

<!--Este es el bueno-->
            <div class="col s4">
              <div align="center">
                <img id="imagen" width="45%" class="responsive-img circle z-depth-5" src="source/user2.jpg">
              </div>
              <h5 id="nombre" align="center">Usuario 2</h5>
              <div class="col s1"></div>
              <div class="input-field col s10">
                <i class="material-icons prefix">vpn_key</i>
                <input id="campo_2" type="password" class="validate" ng-model="userToLog.password">
                <label for="icon_prefix">Contraseña</label>
                <div id="oculto" align="center" style="display: none;">
                  <br><br>
                  <button id="enviar" class="btn waves-effect waves-teal black disabled" ng-click="submitLogin()" name="action">Entrar
                  <i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
            </div>

            <div class="col s4" id="a3">
              <div align="center">
                <img width="45%" class="responsive-img circle z-depth-5" src="source/user3.jpg">
              </div>
              <h5 align="center">Usuario 3</h5>
              <div class="col s1"></div>
              <div class="input-field col s10">
                <i class="material-icons prefix">vpn_key</i>
                <input id="campo_3" type="password" class="validate">
                <label for="icon_prefix">Contraseña</label>
               </div>
            </div>
            <div class="col s4 hide" id="b3">

            </div>
          </div>

      </div>
    </body>

      <footer>
      </footer>

      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      <script type="text/javascript">
       /* function opacar(x, y)
        {
          //document.body.style.background = "url('source/bg2.jpg') no-repeat center";
          document.getElementById("a1").classList.add('hide');
          document.getElementById("b1").classList.remove('hide');
          document.getElementById("a3").classList.add('hide');
          document.getElementById("b3").classList.remove('hide');
          document.getElementById("nombre").innerHTML = x;
          document.getElementById('imagen').src = y;
          //document.getElementById('campo_2'). = ;
        }*/

        $(document).ready(function(){
          
          $("#campo_1").focus(function(){
            var filterVal = 'blur(4px)';
            $("#bg").css("-webkit-filter","none");
            document.getElementById("a1").classList.add('hide');
            document.getElementById("b1").classList.remove('hide');
            document.getElementById("a3").classList.add('hide');
            document.getElementById("b3").classList.remove('hide');
            document.getElementById("nombre").innerHTML = "Usuario 1";
            document.getElementById('imagen').src = "source/user1.jpg";
            $( "#campo_2" ).focus();
            document.getElementById('oculto').style.display = ('block');
            document.getElementById("enviar").classList.remove('disabled');
          });
          $("#campo_2").focus(function(){
            $("#bg").css("-webkit-filter","none");
            document.getElementById("a1").classList.add('hide');
            document.getElementById("b1").classList.remove('hide');
            document.getElementById("a3").classList.add('hide');
            document.getElementById("b3").classList.remove('hide');
            document.getElementById("enviar").classList.remove('disabled');
            document.getElementById('oculto').style.display = 'block';
          });
          $("#campo_3").focus(function(){
            $("#bg").css("-webkit-filter","none");
            document.getElementById("a1").classList.add('hide');
            document.getElementById("b1").classList.remove('hide');
            document.getElementById("a3").classList.add('hide');
            document.getElementById("b3").classList.remove('hide');
            document.getElementById("nombre").innerHTML = "Usuario 3";
            document.getElementById('imagen').src = "source/user3.jpg";
            $( "#campo_2" ).focus();
            document.getElementById("enviar").classList.remove('disabled');
            document.getElementById('oculto').style.display = 'block';
          });

          $("#campo_2").blur(function(){
            var cadena = document.getElementById("campo_2").value;
            if(cadena=="")
            {
              var filterVal = 'blur(4px)';
              $("#bg").css("-webkit-filter", filterVal);
              document.getElementById("enviar").classList.add('disabled');
              document.getElementById("b1").classList.add('hide');
              document.getElementById("a1").classList.remove('hide');
              document.getElementById("b3").classList.add('hide');
              document.getElementById("a3").classList.remove('hide');
              document.getElementById("nombre").innerHTML = "Usuario 2";
              document.getElementById('imagen').src = "source/user2.jpg";
              document.getElementById('oculto').style.display = 'none';
            }
          });
        });



        function desopacar(x,y)
        {
          /*document.getElementById("b1").classList.add('hide');
          document.getElementById("a1").classList.remove('hide');
          document.getElementById("b3").classList.add('hide');
          document.getElementById("a3").classList.remove('hide');
          document.getElementById("nombre").innerHTML = "Usuario 2";
          document.getElementById('imagen').src = "source/user2.jpg";*/
        }
      </script>

  </html>
