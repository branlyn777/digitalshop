<!DOCTYPE html>
<html lang="en" class="no-ie">

<head>
   <!-- Meta-->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
   <meta name="description" content="">
   <meta name="keywords" content="">
   <meta name="author" content="">
   <title>Digital Shop</title>
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!--[if lt IE 9]><script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script><script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script><![endif]-->
   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href=" <?php echo base_url(); ?>47admin/app/css/bootstrap.css">
   <!-- Vendor CSS-->
   <link rel="stylesheet" href=" <?php echo base_url(); ?>47admin/vendor/fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href=" <?php echo base_url(); ?>47admin/vendor/animo/animate+animo.css">
   <link rel="stylesheet" href=" <?php echo base_url(); ?>47admin/vendor/csspinner/csspinner.min.css">
   <!-- START Page Custom CSS-->
   <!-- END Page Custom CSS-->
   <!-- App CSS-->
   <link rel="stylesheet" href=" <?php echo base_url(); ?>47admin/app/css/app.css">
   <!-- Modernizr JS Script-->
   <script src=" <?php echo base_url(); ?>47admin/vendor/modernizr/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src=" <?php echo base_url(); ?>47admin/vendor/fastclick/fastclick.js" type="application/javascript"></script>


   <!--Estilos para el formulario de Registro-->
  <style type="text/css">
      html {
        height: 100%;
      }
      body {
        margin:0;
        padding:0;
        font-family: sans-serif;
      }

      .login-box {
        position: absolute;
        left: 50%;
        width: 100%;
        height: 100%;
        padding: 40px;
        transform: translate(-50%, 0%);
        /*background:  #243b55;*/
        background: rgba(250, 250 , 250);
        /*background: linear-gradient(#FBFCFD, #D1F2F4);*/
        box-sizing: border-box;
        /*box-shadow: 0 15px 25px rgba(0,0,0,.6);*/
      }

      .login-box h2 {
        margin: 0 0 30px;
        padding: 0;
        color: #000;
        text-align: center;
      }

      .login-box .user-box {
        position: relative;
      }

      .login-box .user-box input {
        width: 100%;
        padding: 10px 0;
        font-size: 16px;
        color: #170547FF;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid #3A9;
        outline: none;
        background: transparent;
      }



      .login-box .user-box label {
        position: absolute;
        top:0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: rgba(5, 5 , 5, 0.3);
        pointer-events: none;
        transition: .5s;
      }

      .login-box .user-box input:focus ~ label,
      .login-box .user-box input:valid ~ label {
        top: -20px;
        left: 0;
        color: #0067EF;
        font-size: 12px;
      }

      .login-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #01114B;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px;
        box-shadow: 0 0 5px #000000,
                    0 0 5px #000000,
                    0 0 5px #000000,
                    0 0 5px #000000;
      }/*
      .login-box form button {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: #01114B;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px;
        box-shadow: 0 0 5px #000000,
                    0 0 5px #000000,
                    0 0 5px #000000,
                    0 0 5px #000000;
      }
      .login-box a:hover {
        background: #2170C9;
        color: #fff;
        border-radius: 3px;
        box-shadow: 0 0 5px #319FCD,
                    0 0 25px #319FCD,
                    0 0 50px #319FCD,
                    0 0 100px #319FCD;
      }
      .login-box button:hover {
        background: #2170C9;
        color: #fff;
        border-radius: 3px;
        box-shadow: 0 0 5px #319FCD,
                    0 0 25px #319FCD,
                    0 0 50px #319FCD,
                    0 0 100px #319FCD;
      }

      .login-box a span {
        position: absolute;
        display: block;
      }

      .login-box a span:nth-child(1) {
        top: 0;
        left: -100%;
        width: 100%;
        height: 2px;
        /*background: linear-gradient(90deg, transparent, #03e9f4);*/
        animation: btn-anim1 1s linear infinite;
      }

      @keyframes btn-anim1 {
        0% {
          left: -100%;
        }
        50%,100% {
          left: 100%;
        }
      }

      .login-box a span:nth-child(2) {
        top: -100%;
        right: 0;
        width: 2px;
        height: 100%;
        /*background: linear-gradient(180deg, transparent, #03e9f4);*/
        animation: btn-anim2 1s linear infinite;
        animation-delay: .25s
      }

      @keyframes btn-anim2 {
        0% {
          top: -100%;
        }
        50%,100% {
          top: 100%;
        }
      }

      .login-box a span:nth-child(3) {
        bottom: 0;
        right: -100%;
        width: 100%;
        height: 2px;
        /*background: linear-gradient(270deg, transparent, #03e9f4);*/
        animation: btn-anim3 1s linear infinite;
        animation-delay: .5s
      }

      @keyframes btn-anim3 {
        0% {
          right: -100%;
        }
        50%,100% {
          right: 100%;
        }
      }

      .login-box a span:nth-child(4) {
        bottom: -100%;
        left: 0;
        width: 2px;
        height: 100%;
        /*background: linear-gradient(360deg, transparent, #03e9f4);*/
        animation: btn-anim4 1s linear infinite;
        animation-delay: .75s
      }

      @keyframes btn-anim4 {
        0% {
          bottom: -100%;
        }
        50%,100% {
          bottom: 100%;
        }
      }




          .box {
            width: 100%;
          }

          .box select {
            background-color: #FFFFFF;
            color: black;
            padding: 12px;
            width: 100%;
            border: none;
            font-size: 20px;
            -webkit-appearance: button;
            appearance: button;
            outline: none;
          }

          .box::before {
            content: "\f13a";
            font-family: FontAwesome;
            position: absolute;
            top: 0;
            right: 0;
            width: 20%;
            height: 100%;
            text-align: center;
            font-size: 28px;
            line-height: 45px;
            color: rgba(0, 0, 0, 1.);
            background-color: rgba(255, 255, 255, 0.1);
            pointer-events: none;
          }

          .box:hover{
            color: rgba(203, 232, 22, 0.3);
            background-color: rgba(203, 232, 22, 0.3);
          }

          .box select option {
            padding: 30px;
          }

      /* --- formulario de responsivo ---
      .one-half,
      .one-third {
          position: relative;
          margin-right: 4%;
          float: left;
          margin-bottom: 20px;
       
      }
       
      .one-half {
        width: 48%;
      }
      .one-third {
        width: 30.66%;
      }
       
      .last {
          margin-right: 0 !important;
          clear: right;
      }
       
      @media only screen and (max-width: 767px) {
          .one-half, .one-third {
              width: 100%;
              margin-right: 0;
          }
      }
 */
</style>






</head>

<body>
   <!-- START Main wrapper-->
   <section class="wrapper">
      <!-- START Top Navbar-->
      <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
         <!-- START navbar header-->
         <div class="navbar-header">
            <a href=" <?php echo base_url(); ?>47admin/#" class="navbar-brand">
               <div class="brand-logo">Digital Shop</div>
               <div class="brand-logo-collapsed">Inicio</div>
            </a>
         </div>
         <!-- END navbar header-->
         <!-- START Nav wrapper-->
         <div class="nav-wrapper">
            <!-- START Left navbar-->
            <ul class="nav navbar-nav">
               <li>
                  <a href="#" data-toggle="aside">
                     <em class="fa fa-align-left"></em>
                  </a>
               </li>

            </ul>
         </div>
      </nav>
      <aside class="aside">
         
         <!-- START Sidebar (left)-->
         <nav class="sidebar">
            <ul class="nav">
               <!-- START user info-->
               <li>
                  <div data-toggle="collapse-next" class="item user-block has-submenu">
                     <!-- User picture-->
                     <!--
                     <div class="user-block-picture">
                        <img src=" <?php echo base_url(); ?>47admin/app/img/user/02.jpeg" alt="Avatar" width="100" height="100" class="img-thumbnail img-circle">
                        <div class="user-block-status">
                           <div class="point point-success point-lg"></div>
                        </div>
                     </div>
                     -->
                     <!-- Name and Role-->
                     <div class="user-block-info">
                        <span class="user-block-name item-text">Bienvenido, <?php echo $this->session->userdata('usuario'); ?></span>
                        <span class="user-block-role">Administrador</span>
                        <!-- END Dropdown to change status-->
                     </div>
                  </div>
                  <!-- START User links collapse-->
                  <ul class="nav collapse">
    <!--                  <li><a href=" <?php echo base_url(); ?>47admin/#">Perfil</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Ajustes</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Notificaciones<div class="label label-danger pull-right">120</div></a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Mensajes<div class="label label-success pull-right">300</div></a>
                     </li> -->
                     <li class="divider"></li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Cerrar Sesión</a>
                     </li>
                  </ul>
                  <!-- END User links collapse-->
               </li>
               <!-- END user info-->
               <!-- START Menu-->
               <li class="active">
                  <a href=" <?php echo base_url(); ?>47admin/dashboard.html" title="Dashboard" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-home fa-2x"></em>
                     
                     <span class="item-text">Inicio</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse">
                     <li class="active">
                        <a href="<?php echo base_url(); ?>index.php/usuarios/index" title="Default" data-toggle="" class="no-submenu">
                           <span class="item-text">Inicio</span>
                        </a>
                     </li>
<!--                      <li>
                        <a href="<?php echo base_url(); ?>index.php/usuarios/inicio" title="No Sidebar" data-toggle="" class="no-submenu">
                           <span class="item-text">Inicio 2</span>
                        </a>
                     </li> -->
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/dashboard-noprofile.html" title="No Profile" data-toggle="" class="no-submenu">
                           <span class="item-text">Cerrar Sesión</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href=" <?php echo base_url(); ?>47admin/#" title="Charts" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-user fa-2x"></em>
                     <span class="item-text">Usuarios</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/usuarios/lista" title="Flot" data-toggle="" class="no-submenu">
                           <span class="item-text">Lista de Usuarios</span>
                        </a>
                     </li>
<!--                      <li>
                        <a href=" <?php echo base_url(); ?>47admin/chart-radial.html" title="Radial" data-toggle="" class="no-submenu">
                           <span class="item-text">Estado Usuarios</span>
                        </a>
                     </li> -->
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <!--
               <li>
                  <a href=" <?php echo base_url(); ?>47admin/#" title="Tables" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-table"></em>
                     <span class="item-text">Tablas</span>
                  </a>
                  <ul class="nav collapse ">
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/table-datatable.html" title="Data Table" data-toggle="" class="no-submenu">
                           <span class="item-text">Data Table</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/table-standard.html" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Standard</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/table-extended.html" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">Extended</span>
                        </a>
                     </li>
                  </ul>
               </li>
            -->
               <li>
                  <a href=" <?php echo base_url(); ?>47admin/#" title="Forms" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-users fa-2x"></em>
                     <span class="item-text">Clientes</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/form-standard.html" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Lista de Clientes</span>
                        </a>
                     </li>
<!--                      <li>
                        <a href=" <?php echo base_url(); ?>47admin/form-extended.html" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">Agrergar Cliente</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/form-validation.html" title="Validation" data-toggle="" class="no-submenu">
                           <span class="item-text">Reporte Clientes</span>
                        </a>
                     </li> -->
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href=" <?php echo base_url(); ?>47admin/#" title="Forms" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-mobile fa-2x"></em>
                     <span class="item-text">Productos</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/productos/listaproductos" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Lista de Productos</span>
                        </a>
                     </li>
<!--                      <li>
                        <a href="<?php echo base_url(); ?>index.php/smartphones/listasmartphones" title="Landing" data-toggle="" class="no-submenu">
                           <span class="item-text">Lista Smartphones</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/form-validation.html" title="Validation" data-toggle="" class="no-submenu">
                           <span class="item-text">Reporte Clientes</span>
                        </a>
                     </li> -->
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href=" <?php echo base_url(); ?>47admin/#" title="Forms" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-folder-open fa-2x"></em>
                     <span class="item-text">Reportes</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/reportes/listareporteventas" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Reporte de Ventas</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/reportes/listareporteproductos" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">Reporte Ventas por Productos</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/reportes/listareporteusuarios" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">Reporte Ventas por Usuario</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
<!--                <li>
                  <a href=" <?php echo base_url(); ?>47admin/#" title="Elements" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-shopping-cart fa-2x"></em>
                     <span class="item-text">Compras</span>
                  </a>
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/smartphones/comprarsmartphones" title="Panels" data-toggle="" class="no-submenu">
                           <span class="item-text">Comprar Smartphones</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/portlets.html" title="Portlets" data-toggle="" class="no-submenu">
                           <span class="item-text">Comprar Accesorios</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/button.html" title="Buttons" data-toggle="" class="no-submenu">
                           <span class="item-text">Detalles</span>
                        </a>
                     </li>
                  </ul>
               </li> -->
               <!-- END Menu-->
               <!-- Sidebar footer    -->
               <li class="nav-footer">
                  <div class="nav-footer-divider"></div>
                  <!-- START button group-->
                  <div class="btn-group text-center">
                     <button type="button" data-toggle="tooltip" data-title="Add Contact" class="btn btn-link">
                        <em class="fa fa-user text-muted"><sup class="fa fa-plus"></sup>
                        </em>
                     </button>
                     <button type="button" data-toggle="tooltip" data-title="Settings" class="btn btn-link">
                        <em class="fa fa-cog text-muted"></em>
                     </button>
                     <button type="button" data-toggle="tooltip" data-title="Logout" class="btn btn-link">
                        <em class="fa fa-sign-out text-muted"></em>
                     </button>
                  </div>
                  <!-- END button group-->
               </li>
            </ul>
         </nav>
         <!-- END Sidebar (left)-->
      
      </aside>
      <!-- End aside-->

      <!-- START Main section-->
      <section>
       <!-- START Page content-->


        <div class="login-box">
        <center>
          <h2>Registrar Nuevo Usuario</h2>
        </center>
         <div class="col-lg-4">
               <?php
                $atributos = array('class' => 'form-group', 'idusuario' => 'myform');
                echo form_open_multipart('usuarios/agregarbd',$atributos);
                ?>
                <div class="user-box">
                  <!-- Nombre de usuario. Obligatorio, entre 4-10 carácteres
                      Sólo se permiten letras y números -->
                  <input type="text" name="usuario" required="" minlength="5" maxlength="17" required pattern="[A-Za-z0-9]+" title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 17 ¡No poner espacios en blanco!">
                  <label>Usuario - Para el Inicio de Sesión</label>
                </div>
                <div class="user-box">
                  <input type="password" name="contrasena" required="" required pattern="[A-Za-z0-9]{9,25}" title="Letras y números. Tamaño mínimo: 9. Tamaño máximo: 25">
                  <label>Ingrese Contraseña</label>
                </div>
               <div class="user-box">
                  <input type="password" name="contrasena1"  required="" required pattern="[A-Za-z0-9]{9,25}" title="Letras y números. Tamaño mínimo: 9. Tamaño máximo: 25">
                  <label>Repita Contraseña</label>
                </div>
                <div class="user-box">
                  <input type="text" name="nombre" required="" required pattern="[a-zA-Z ]{2,30}" title="Solo Letras. Tamaño mínimo: 2. Tamaño máximo: 30">
                  <label>Nombre Completo</label>
                </div>
                <div class="user-box">
                  <input type="text" name="primerapellido" required="" required pattern="[a-zA-Z ]{2,30}" title="Solo Letras. Tamaño mínimo: 2. Tamaño máximo: 30">
                  <label>Apellido Paterno</label>
                </div>
         </div>




         <div class="col-lg-4">
                <div class="user-box">
                  <input type="text" name="segundoapellido" required="" required pattern="[a-zA-Z ]{2,30}" title="Solo Letras. Tamaño mínimo: 2. Tamaño máximo: 30">
                  <label>Apellido Materno</label>
                </div>
                <div class="user-box">
                  <input type="email" name="email" required=""  title="Introduce un Correo Válido. Tamaño mínimo: 5. Tamaño máximo: 30">
                  <label>Correo Electrónico</label>
                </div>
                <div class="user-box">
                  <input type="text" name="telefono" required="" required pattern="[A-Za-z0-9]{7,8}" title="Solo Números. Tamaño mínimo: 7. Tamaño máximo: 8">
                  <label>Celular/Teléfono</label>
                </div>
                <div class="user-box">
                  <input type="text" name="ci" required="" required pattern="[A-Za-z0-9]{7,10}" title="Solo Letras en caso de ser Nesesario. Tamaño mínimo: 7. Tamaño máximo: 10">
                  <label>Número de Carnet</label>
                </div>
  
       
         </div>



         <div class="col-lg-4">
                <label>Fecha de Nacimiento</label>
                <div class="user-box">
                  <input type="date" name="fechanacimiento" required="">
                </div>
                <br> 

                <label>Género</label>
                <div class="box">
                  <select  name="genero">
                  <option type="text">Masculino</option>
                  <option type="text">Femenino</option>
                </select>
                </div> 
                 <br>
                <label>Cargo</label>
                <div class="box">
                  <select  name="rolusuario">
                  <option type="text">Cajero</option>
                  <option type="text">Administrador</option>
                </select>
                </div>
       
                 <br>
                 <br>
                 <br>
                 <br>
         </div>

            <center>
             <section class="main-content">
                <button type="submit" class="btn btn-labeled btn-primary" onClick="comprobarClave()">
                 <span class="btn-label"><i class="fa fa-plus-circle"></i>
                 </span>Registrar</button>
             </section>
            <!--<button type="submit" class="user-box">Registrar</button>-->
            </center>

            <?php
              echo form_close();
            ?> 
  



            </div>

         <!-- END Page content-->
      </section>
      <!-- END Main section-->
   </section>
   <!-- END Main wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->
   <script src=" <?php echo base_url(); ?>47admin/vendor/jquery/jquery.min.js"></script>
   <script src=" <?php echo base_url(); ?>47admin/vendor/bootstrap/js/bootstrap.min.js"></script>
   <!-- Plugins-->
   <script src=" <?php echo base_url(); ?>47admin/vendor/chosen/chosen.jquery.min.js"></script>
   <script src=" <?php echo base_url(); ?>47admin/vendor/slider/js/bootstrap-slider.js"></script>
   <script src=" <?php echo base_url(); ?>47admin/vendor/filestyle/bootstrap-filestyle.min.js"></script>
   <!-- Animo-->
   <script src=" <?php echo base_url(); ?>47admin/vendor/animo/animo.min.js"></script>
   <!-- Sparklines-->
   <script src=" <?php echo base_url(); ?>47admin/vendor/sparklines/jquery.sparkline.min.js"></script>
   <!-- Slimscroll-->
   <script src=" <?php echo base_url(); ?>47admin/vendor/slimscroll/jquery.slimscroll.min.js"></script>
   <!-- START Page Custom Script-->
   <!--  Flot Charts-->
   <script src=" <?php echo base_url(); ?>47admin/vendor/flot/jquery.flot.min.js"></script>
   <script src=" <?php echo base_url(); ?>47admin/vendor/flot/jquery.flot.tooltip.min.js"></script>
   <script src=" <?php echo base_url(); ?>47admin/vendor/flot/jquery.flot.resize.min.js"></script>
   <script src=" <?php echo base_url(); ?>47admin/vendor/flot/jquery.flot.pie.min.js"></script>
   <script src=" <?php echo base_url(); ?>47admin/vendor/flot/jquery.flot.time.min.js"></script>
   <script src=" <?php echo base_url(); ?>47admin/vendor/flot/jquery.flot.categories.min.js"></script>
   <!--[if lt IE 8]><script src=" <?php echo base_url(); ?>47admin/js/excanvas.min.js"></script><![endif]-->
   <!-- END Page Custom Script-->
   <!-- App Main-->
   <script src=" <?php echo base_url(); ?>47admin/app/js/app.js"></script>
   <!-- END Scripts-->




</body>

</html>
