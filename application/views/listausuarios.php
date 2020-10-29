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


   <link rel="stylesheet" href=" <?php echo base_url(); ?>47admin/app/css/fonts.css">

<!--AGaramondPro-Bold.otf-->








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


   <!--Estilos para las Tablas-->
   <style type="text/css">

      table tr:hover{
         background-color: rgba(13, 190, 167, .2);
         cursor: pointer;



      
      box-shadow: rgba(13, 190, 167, .2) -1px 1px, rgba(13, 190, 167, .2) -2px 2px, rgba(13, 190, 167, .2) -3px 3px, rgba(13, 190, 167, .2) -4px 4px, rgba(13, 190, 167, .2) -5px 5px, rgba(13, 190, 167, .2) -6px 6px;



        transform: translate3d(6px, -6px, 0);
        transition-delay: 0s;
        transition-duration: 0.4s;
        transition-property: all;
        transition-timing-function: line;
      }
               * {
           -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
           box-sizing: border-box;
         }
         *:before, *:after {
           -webkit-box-sizing: border-box;
           -moz-box-sizing: border-box;
           box-sizing: border-box;
         }

         body {
           font-family: "Helvetica Neue", "Helvetica", "Roboto", "Arial", sans-serif;
           color: #5e5d52;
         }

         a {
           color: #337aa8;
         }
         a:hover, a:focus {
           color: #4b8ab2;
         }

         .container {
           margin: 5% 3%;
         }
         @media (min-width: 48em) {
           .container {
             margin: 2%;
           }
         }
         @media (min-width: 75em) {
           .container {
             margin: 2em auto;
             max-width: 75em;
           }
         }

         .responsive-table {
           width: 100%;
           margin-bottom: 1.5em;
           border-spacing: 0;
         }
         @media (min-width: 48em) {
           .responsive-table {
             font-size: 0.9em;
           }
         }
         @media (min-width: 62em) {
           .responsive-table {
             font-size: 1em;
           }
         }
         .responsive-table thead {
           position: absolute;
           clip: rect(1px 1px 1px 1px);
           /* IE6, IE7 */
           padding: 0;
           border: 0;
           height: 1px;
           width: 1px;
           overflow: hidden;
         }
         @media (min-width: 48em) {
           .responsive-table thead {
             position: relative;
             clip: auto;
             height: auto;
             width: auto;
             overflow: auto;
           }
         }
         .responsive-table thead th {
           background-color: #1d96b2;
           border: 1px solid #1d96b2;
           font-weight: normal;
           text-align: center;
           color: white;
         }
         .responsive-table thead th:first-of-type {
           text-align: left;
         }
         .responsive-table tbody,
         .responsive-table tr,
         .responsive-table th,
         .responsive-table td {
           display: block;
           padding: 0;
           text-align: left;
           white-space: normal;


         }


         @media (min-width: 48em) {
           .responsive-table tr {
             display: table-row;
           }
         }
         .responsive-table th,
         .responsive-table td {
           padding: 0.5em;
           vertical-align: middle;
         }
         @media (min-width: 30em) {
           .responsive-table th,
           .responsive-table td {
             padding: 0.75em 0.5em;
           }
         }
         @media (min-width: 48em) {
           .responsive-table th,
           .responsive-table td {
             display: table-cell;
             padding: 0.5em;
           }
         }
         @media (min-width: 62em) {
           .responsive-table th,
           .responsive-table td {
             padding: 0.75em 0.5em;
           }
         }
         @media (min-width: 75em) {
           .responsive-table th,
           .responsive-table td {
             padding: 0.75em;
           }
         }
         .responsive-table caption {
           margin-bottom: 1em;
           font-size: 1em;
           font-weight: bold;
           text-align: center;
         }
         @media (min-width: 48em) {
           .responsive-table caption {
             font-size: 1.5em;
           }
         }
         .responsive-table tfoot {
           font-size: 0.8em;
           font-style: italic;
         }
         @media (min-width: 62em) {
           .responsive-table tfoot {
             font-size: 0.9em;
           }
         }
         @media (min-width: 48em) {
           .responsive-table tbody {
             display: table-row-group;
           }
         }
         .responsive-table tbody tr {
           margin-bottom: 1em;
         }
         @media (min-width: 48em) {
           .responsive-table tbody tr {
             display: table-row;
             border-width: 1px;
           }
         }
         .responsive-table tbody tr:last-of-type {
           margin-bottom: 0;
         }
         @media (min-width: 48em) {
           .responsive-table tbody tr:nth-of-type(even) {
             background-color: rgba(94, 93, 82, 0.1);
           }
         }
         .responsive-table tbody th[scope="row"] {
           background-color: #1d96b2;
           color: white;
         }
         @media (min-width: 30em) {
           .responsive-table tbody th[scope="row"] {
             border-left: 1px solid #1d96b2;
             border-bottom: 1px solid #1d96b2;
           }
         }
         @media (min-width: 48em) {
           .responsive-table tbody th[scope="row"] {
             background-color: transparent;
             color: #5e5d52;
             text-align: left;
           }
         }
         .responsive-table tbody td {
           text-align: right;
         }
         @media (min-width: 48em) {
           .responsive-table tbody td {
             border-left: 1px solid #1d96b2;
             border-bottom: 1px solid #1d96b2;
             text-align: center;
           }
         }
         @media (min-width: 48em) {
           .responsive-table tbody td:last-of-type {
             border-right: 1px solid #1d96b2;
           }
         }
         .responsive-table tbody td[data-type="currency"] {
           text-align: right;
         }
         .responsive-table tbody td[data-title]:before {
           content: attr(data-title);
           float: left;
           font-size: 0.8em;
           color: rgba(94, 93, 82, 0.75);
         }
         @media (min-width: 30em) {
           .responsive-table tbody td[data-title]:before {
             font-size: 0.9em;
           }
         }
         @media (min-width: 48em) {
           .responsive-table tbody td[data-title]:before {
             content: none;
           }
         }






         .fuente{
          font-family: 'Adobe Garamond Pro Bold';
         }





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
               <li>
                  <a href=" <?php echo base_url(); ?>47admin/#" data-toggle="navbar-search">
                     <em class="fa fa-search"></em>
                  </a>
               </li>
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="nav navbar-nav navbar-right">
               <!-- START Messages menu (dropdown-list)-->
               <li class="dropdown dropdown-list">
                  <a href=" <?php echo base_url(); ?>47admin/#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                     <em class="fa fa-envelope"></em>
                     <div class="label label-danger">5</div>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li class="dropdown-menu-header">Usted tiene 5 nuevos Mensajes</li>
                     <li>
                        <div class="scroll-viewport">
                           <!-- START list group-->
                           <div class="list-group scroll-content">
                              <!-- START list group item-->
                              <a href=" <?php echo base_url(); ?>47admin/#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img style="width: 48px; height: 48px;" src=" <?php echo base_url(); ?>47admin/app/img/user/01.jpg" alt="Image" class="media-object img-rounded">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">2h</small>
                                       <strong class="media-heading text-primary">
                                          <div class="point point-success point-lg"></div>Sheila Carter</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href=" <?php echo base_url(); ?>47admin/#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img style="width: 48px; height: 48px;" src=" <?php echo base_url(); ?>47admin/app/img/user/04.jpg" alt="Image" class="media-object img-rounded">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">3h</small>
                                       <strong class="media-heading text-primary">
                                          <div class="point point-success point-lg"></div>Rich Reynolds</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href=" <?php echo base_url(); ?>47admin/#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img style="width: 48px; height: 48px;" src=" <?php echo base_url(); ?>47admin/app/img/user/03.jpg" alt="Image" class="media-object img-rounded">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <div class="point point-danger point-lg"></div>Beverley Pierce</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href=" <?php echo base_url(); ?>47admin/#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img style="width: 48px; height: 48px;" src=" <?php echo base_url(); ?>47admin/app/img/user/05.jpg" alt="Image" class="media-object img-rounded">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <div class="point point-danger point-lg"></div>Perry Cole</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                              <!-- START list group item-->
                              <a href=" <?php echo base_url(); ?>47admin/#" class="list-group-item">
                                 <div class="media">
                                    <div class="pull-left">
                                       <img style="width: 48px; height: 48px;" src=" <?php echo base_url(); ?>47admin/app/img/user/06.jpg" alt="Image" class="media-object img-rounded">
                                    </div>
                                    <div class="media-body clearfix">
                                       <small class="pull-right">4h</small>
                                       <strong class="media-heading text-primary">
                                          <div class="point point-danger point-lg"></div>Carolyn Carpenter</strong>
                                       <p class="mb-sm">
                                          <small>Cras sit amet nibh libero, in gravida nulla. Nulla...</small>
                                       </p>
                                    </div>
                                 </div>
                              </a>
                              <!-- END list group item-->
                           </div>
                           <!-- END list group-->
                        </div>
                     </li>
                     <!-- START dropdown footer-->
                     <li class="p">
                        <a href=" <?php echo base_url(); ?>47admin/#" class="text-center">
                           <small class="text-primary">READ ALL</small>
                        </a>
                     </li>
                     <!-- END dropdown footer-->
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END Messages menu (dropdown-list)-->
               <!-- START Alert menu-->
               <li class="dropdown dropdown-list">
                  <a href=" <?php echo base_url(); ?>47admin/#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                     <em class="fa fa-bell"></em>
                     <div class="label label-info">120</div>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li>
                        <!-- START list group-->
                        <div class="list-group">
                           <!-- list item-->
                           <a href=" <?php echo base_url(); ?>47admin/#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-envelope-o fa-2x text-success"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <div class="media-heading">Unread messages</div>
                                    <p class="m0">
                                       <small>You have 10 unread messages</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- list item-->
                           <a href=" <?php echo base_url(); ?>47admin/#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-cog fa-2x"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <div class="media-heading">New settings</div>
                                    <p class="m0">
                                       <small>There are new settings available</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- list item-->
                           <a href=" <?php echo base_url(); ?>47admin/#" class="list-group-item">
                              <div class="media">
                                 <div class="pull-left">
                                    <em class="fa fa-fire fa-2x"></em>
                                 </div>
                                 <div class="media-body clearfix">
                                    <div class="media-heading">Updates</div>
                                    <p class="m0">
                                       <small>There are
                                          <span class="text-primary">2</span>new updates available</small>
                                    </p>
                                 </div>
                              </div>
                           </a>
                           <!-- last list item -->
                           <a href=" <?php echo base_url(); ?>47admin/#" class="list-group-item">
                              <small>Unread notifications</small>
                              <span class="badge">14</span>
                           </a>
                        </div>
                        <!-- END list group-->
                     </li>
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END Alert menu-->
               <!-- START User menu-->
               <li class="dropdown">
                  <a href=" <?php echo base_url(); ?>47admin/#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                     <em class="fa fa-user"></em>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">
                     <li>
                        <div class="p">
                           <p>Overall progress</p>
                           <div class="progress progress-striped progress-xs m0">
                              <div role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%;" class="progress-bar progress-bar-success">
                                 <span class="sr-only">80% Complete</span>
                              </div>
                           </div>
                        </div>
                     </li>
                     <li class="divider"></li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Perfil</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Ajustes</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Notificaciones<div class="label label-info pull-right">5</div></a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Mensajes<div class="label label-danger pull-right">10</div></a>
                     </li>
                     <li><a href="<?php echo base_url(); ?>index.php/usuarios/logout">Cerrar Sesión</a>
                     </li>
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END User menu-->
               <!-- START Contacts button-->
               <li>
                  <a href=" <?php echo base_url(); ?>47admin/#" data-toggle="offsidebar">
                     <em class="fa fa-align-right"></em>
                  </a>
               </li>
               <!-- END Contacts menu-->
            </ul>
            <!-- END Right Navbar-->
         </div>
         <!-- END Nav wrapper-->
         <!-- START Search form-->
         <form role="search" class="navbar-form">
            <div class="form-group has-feedback">
               <input type="text" placeholder="Type and hit Enter.." class="form-control">
               <div data-toggle="navbar-search-dismiss" class="fa fa-times form-control-feedback"></div>
            </div>
            <button type="submit" class="hidden btn btn-default">Submit</button>
         </form>
         <!-- END Search form-->
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
                     <!-- User picture
                     <div class="user-block-picture">
                        <img src=" <?php echo base_url(); ?>47admin/app/img/user/02.jpeg" alt="Avatar" width="100" height="100" class="img-thumbnail img-circle">
                        <div class="user-block-status">
                           <div class="point point-success point-lg"></div>
                        </div>
                     </div>
                      Name and Role-->
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
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/smartphones/listasmartphones" title="Landing" data-toggle="" class="no-submenu">
                           <span class="item-text">Lista Smartphones</span>
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
                        <a href=" <?php echo base_url(); ?>47admin/panels.html" title="Panels" data-toggle="" class="no-submenu">
                           <span class="item-text">Tabla Compras</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/portlets.html" title="Portlets" data-toggle="" class="no-submenu">
                           <span class="item-text">Compras Smartphones</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/button.html" title="Buttons" data-toggle="" class="no-submenu">
                           <span class="item-text">Compras Accesorios</span>
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
      <!-- START aside-->
      <aside class="offsidebar">
         <!-- START Off Sidebar (right)-->
         <nav>
            <ul class="nav">
               <!-- START user info-->
               <li>
                  <div class="item">
                     <div style="background-image: url('app/img/offsidebar-bg.jpg')" class="p-lg">
                        <div class="text-center">
                           <p>
                              <img src=" <?php echo base_url(); ?>47admin/app/img/user/02.jpg" style="width: 64px; height: 64px" alt="Image" class="img-circle img-thumbnail">
                           </p>
                           <p class="text-white">
                              <strong>Alex</strong>
                           </p>
                        </div>
                     </div>
                  </div>
               </li>
               <!-- END user info-->
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">ONLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href=" <?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-success point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src=" <?php echo base_url(); ?>47admin/app/img/user/05.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Tommy Sam</strong>
                           <br>
                           <small class="text-muted">tommy39</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href=" <?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-success point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src=" <?php echo base_url(); ?>47admin/app/img/user/06.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Beverley Pierce</strong>
                           <br>
                           <small class="text-muted">be40210</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href=" <?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-danger point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src=" <?php echo base_url(); ?>47admin/app/img/user/07.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Victor Long</strong>
                           <br>
                           <small class="text-muted">longlong</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href=" <?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-warning point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src=" <?php echo base_url(); ?>47admin/app/img/user/08.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Danielle Berry</strong>
                           <br>
                           <small class="text-muted">hunter49</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <!-- START list title-->
               <li class="p">
                  <small class="text-muted">OFFLINE</small>
               </li>
               <!-- END list title-->
               <li>
                  <!-- START User status-->
                  <a href=" <?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src=" <?php echo base_url(); ?>47admin/app/img/user/09.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Bertha Cooper</strong>
                           <br>
                           <small class="text-muted">ber123</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
                  <!-- START User status-->
                  <a href=" <?php echo base_url(); ?>47admin/#" class="media p mt0">
                     <span class="pull-right">
                        <span class="point point-lg"></span>
                     </span>
                     <span class="pull-left">
                        <!-- Contact avatar-->
                        <img src=" <?php echo base_url(); ?>47admin/app/img/user/10.jpg" style="width: 40px; height: 40px" alt="Image" class="media-object img-circle">
                     </span>
                     <!-- Contact info-->
                     <span class="media-body">
                        <span class="media-heading">
                           <strong class="text-white">Anne Curtis</strong>
                           <br>
                           <small class="text-muted">anni</small>
                        </span>
                     </span>
                  </a>
                  <!-- END User status-->
               </li>
               <li>
                  <!-- Optional link to list more users-->
                  <a href=" <?php echo base_url(); ?>47admin/#" title="See more contacts" class="p">
                     <strong>
                        <small class="text-muted">&hellip;</small>
                     </strong>
                  </a>
               </li>
            </ul>
         </nav>
         <!-- END Off Sidebar (right)-->
      </aside>
      <!-- END aside-->
      <!-- START Main section-->
      <section>
         <!-- START Page content-->
         <section class="main-content">
                  <!--
                  <button type="button" class="btn btn-labeled btn-primary pull-right">
                  <span class="btn-label"><i class="fa fa-plus-circle"></i></span>
                  Agregar Nuevo Usuario
                  </button>
                  -->
                  
                     <?php 
                        $atributos = array('class' => 'form-group', 'idusuario' => 'myform');
                        echo form_open_multipart('usuarios/agregar',$atributos); ?>
                        <center>
                           <button type="submit" class="btn btn-labeled btn-primary pull-right">
                          <span class="btn-label"><i class="fa fa-plus-circle"></i></span>
                           Agregar Nuevo Usuario</button>
                        </center>
                     <?php echo form_close(); ?>

                      <br>

                  <div class="titulo">
                    <center><h1>Lista de Usuarios</h1></center>
                  </div>


                  <div class="parrafo">

                     <table class="responsive-table">
                        <thead>
                           <tr>
                              <th scope="col">No.</th>
                              <th scope="col">Nombre</th>
                              <th scope="col">Apellido Paterno</th>
                              <th scope="col">Apellido Materno</th>
                              <th scope="col">Correo Electrónico</th>
                              <th scope="col">Número de Celular</th>
                              <th scope="col">Número de Carnet</th>
                              <th scope="col">Fecha de Registro</th>
                              <th scope="col">Fecha de Nacimiento</th>
                              <th scope="col">Género</th>
                              <th scope="col">Cargo</th>
                              <th scope="col">Modificar</th>
                              <th scope="col">Eliminar</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                              $indice=1;
                              foreach ($usuarios->result() as $row)
                              {
                           ?>    
                                 <tr>
                                    <th scope="row"><?php echo $indice; ?></th>
                                    <td data-title="Nombre"><?php echo $row->nombre; ?></td>
                                    <td data-title="Apellido Paterno"><?php echo $row->primerapellido; ?></td>
                                    <td data-title="Apellido Materno"><?php echo $row->segundoapellido; ?></td>
                                    <td data-title="Correo Electrónico"><?php echo $row->email; ?></td>
                                    <td data-title="Número de Celular"><?php echo $row->telefono; ?></td>
                                    <td data-title="Número de Carnet"><?php echo $row->ci; ?></td>
                                    <td data-title="Fecha de Registro"><?php echo $row->fecharegistro; ?></td>
                                    <td data-title="Fecha de Nacimiento"><?php echo $row->fechanacimiento; ?></td>
                                    <td data-title="Género"><?php echo $row->genero; ?></td>
                                    <td data-title="Cargo"><?php echo $row->rolusuario; ?></td>
                                    <td>
                                       <center>
                                          <?php
                                          $atributos = array('class' => 'form-group','idusuario' => 'myform');
                                          echo form_open_multipart('usuarios/modificar',$atributos); 
                                          ?>
                                          <input type="hidden" name="idusuario" value="<?php echo $row->idusuario ?>">
                                          <button type="submit" class="btn btn-primary btn">Modificar</button>
                                          <?php echo form_close(); ?>
                                       </center>
                                    </td>
                                    <td>
                                      <center>
                                          <?php
                                          $atributos = array('class' => 'form-group', 'idusuario' => 'myform');
                                          echo form_open_multipart('usuarios/eliminarbd',$atributos); ?>
                                          <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
                                          <button type="submit" class="btn btn-danger btn">Eliminar</button>
                                          <?php echo form_close(); ?>
                                      </center>
                                    </td>
                                 </tr>
                                 <?php
                                 $indice++;
                                 
                              }
                           ?>
                        </tbody>
                     </table>


                     <!--
                     <?php 
                        //$atributos = array('class' => 'form-group', 'idusuario' => 'myform');
                        //echo form_open_multipart('usuarios/agregar',$atributos); ?>
                        <center>
                           <button type="submit" class="btn btn-primary btn">Agregar Usuario</button>
                        </center>
                     <?php //echo form_close(); ?>

                      -->




                     
                  </div>




         </section>
         <!-- END Page content-->
      </section>
      <!-- END Main section-->
   </section>
   <!-- END Main wrapper-->
   