<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie ie6 lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="ie ie7 lt-ie9 lt-ie8"        lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="ie ie8 lt-ie9"               lang="en"> <![endif]-->
<!--[if IE 9]>    <html class="ie ie9"                      lang="en"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-ie">
<!--<![endif]-->

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











<style type="text/css">

   .marco{
      border-color: black;
      border-radius: 5px;
      border-style: solid;
      width: 610px;
   }




</style>







    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAc_XblPUysUdhmPcu_2klBO3STmS1Vdrw&callback=initMap&libraries=&v=weekly"
      defer
    ></script>


    <style type="text/css">
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
    <script>
      let map;

      function initMap() {
        map = new google.maps.Map(document.getElementById("map"), {
          center: { lat: -34.397, lng: 150.644 },
          zoom: 15,
        });
      }
    </script>





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
               <div class="brand-logo-collapsed">DS</div>
            </a>
         </div>
         <!-- END navbar header-->
         <!-- START Nav wrapper-->
         <div class="nav-wrapper">
            <!-- START Left navbar-->
            <ul class="nav navbar-nav">
               <li>
                  <a href=" <?php echo base_url(); ?>47admin/#" data-toggle="aside">
                     <em class="fa fa-align-left"></em>
                  </a>
               </li>

            </ul>
            <!-- END Left navbar-->

         </div>
         <!-- END Nav wrapper-->

      </nav>
      <!-- END Top Navbar-->
      <!-- START aside-->
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
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Perfil</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Ajustes</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Notificaciones<div class="label label-danger pull-right">120</div></a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Mensajes<div class="label label-success pull-right">300</div></a>
                     </li>
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
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/usuarios/inicio" title="No Sidebar" data-toggle="" class="no-submenu">
                           <span class="item-text">Inicio 2</span>
                        </a>
                     </li>
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
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/chart-radial.html" title="Radial" data-toggle="" class="no-submenu">
                           <span class="item-text">Estado Usuarios</span>
                        </a>
                     </li>
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
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/form-extended.html" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">Agrergar Cliente</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/form-validation.html" title="Validation" data-toggle="" class="no-submenu">
                           <span class="item-text">Reporte Clientes</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href=" <?php echo base_url(); ?>47admin/#" title="Forms" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-money fa-2x"></em>
                     <span class="item-text">Ventas</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/form-standard.html" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Tabla Ventas</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/form-extended.html" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">Reporte Ventas</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href=" <?php echo base_url(); ?>47admin/#" title="Elements" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-shopping-cart fa-2x"></em>
                     <span class="item-text">Compras</span>
                  </a>
                  <!-- START SubMenu item-->
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
                  <!-- END SubMenu item-->
               </li>
               <li>
                  <a href=" <?php echo base_url(); ?>47admin/#" title="Smartphones" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-mobile fa-2x"></em>
                     <span class="item-text">Smartphones</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/smartphones/listasmartphones" title="Landing" data-toggle="" class="no-submenu">
                           <span class="item-text">Lista Smartphones</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/pages/login.html" title="Login" data-toggle="" class="no-submenu">
                           <span class="item-text">Login</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/pages/login-multi.html" title="Login Multi" data-toggle="" class="no-submenu">
                           <span class="item-text">Login Multi</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/pages/signup.html" title="Sign up" data-toggle="" class="no-submenu">
                           <span class="item-text">Sign up</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/pages/lock.html" title="Lock" data-toggle="" class="no-submenu">
                           <span class="item-text">Lock</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/pages/recover.html" title="Recover Password" data-toggle="" class="no-submenu">
                           <span class="item-text">Recover Password</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/template.html" title="Empty Template" data-toggle="" class="no-submenu">
                           <span class="item-text">Empty Template</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/timeline.html" title="Timeline" data-toggle="" class="no-submenu">
                           <span class="item-text">Timeline</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               <li>
                  
                  <a href=" <?php echo base_url(); ?>47admin/#" title="Smartphones" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-mobile fa-2x"></em>
                     <span class="item-text">Acerda de Nosotros</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/usuarios/maps" title="Landing" data-toggle="" class="no-submenu">
                           <span class="item-text">Nuestra Dirección</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/pages/login.html" title="Login" data-toggle="" class="no-submenu">
                           <span class="item-text">Cóntactenos</span>
                        </a>
                     </li>
                  </ul>
                  <!-- END SubMenu item-->
               
               </li>
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
         <section class="main-content">
         
            
            <center>
               <div class="fuente">
                  <img src=" <?php echo base_url(); ?>47admin/app/img/milogo.png" width="70" height="70">
                   <h1>Google Maps API</h1>
               </div>
            </center>
            <br>
            <br>
            <br>
            <div class="row">



<center>
         <h2>Federico Alvares Plata</h2>
         <h3>Desarrollado por Branlyn Mamani Oyardo</h3>
      <div class="marco">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d475.9167722909698!2d-66.15833174118626!3d-17.395743143920097!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e373f6ba2438bd%3A0x5f3a30259586f0a1!2sInstituto%20Federico%20%C3%81lvarez%20Plata!5e0!3m2!1ses-419!2sbo!4v1601761206560!5m2!1ses-419!2sbo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
         </iframe>
      </div>
</center>





<br>
<br>



<center>
         <h2>Terminal de Buses</h2>
         <h3>Desarrollado por Branlyn Mamani Oyardo</h3>
      <div class="marco">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d475.8988281008652!2d-66.15788343822686!3d-17.402637163539573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e373ee1f4fa41d%3A0xbc5f0afd4796b56a!2sTerminal%20De%20Buses!5e0!3m2!1ses-419!2sbo!4v1601761371113!5m2!1ses-419!2sbo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
</center>


<br>
<br>



<center>
         <h2>Cine Center</h2>
         <h3>Desarrollado por Branlyn Mamani Oyardo</h3>
      <div class="marco">
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d475.95614732719906!2d-66.1514923169254!3d-17.380606271215125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e374053d43ff91%3A0xa5737a19da31793!2sCine%20Center!5e0!3m2!1ses-419!2sbo!4v1601761604998!5m2!1ses-419!2sbo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
</center>






<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
         <h1>Google APIS</h1>
         <h3>Desarrollado por Branlyn Mamani Oyardo</h3>
      <div >
         <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d475.95614732719906!2d-66.1514923169254!3d-17.380606271215125!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93e374053d43ff91%3A0xa5737a19da31793!2sCine%20Center!5e0!3m2!1ses-419!2sbo!4v1601761604998!5m2!1ses-419!2sbo" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
</center>

<div id="map"></div>







































AIzaSyAc_XblPUysUdhmPcu_2klBO3STmS1Vdrw



















            </div>
         </section>
         <!-- END Page content-->
      </section>
      <!-- END Main section-->
   </section>
   <!-- END Main wrapper-->
   