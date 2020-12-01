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

   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/app/css/fonts.css">
   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/app/css/bootstrap.css">
   <!-- Vendor CSS-->
   <link rel="stylesheet" href=" <?php echo base_url(); ?>47admin/vendor/fontawesome/css/font-awesome.min.css">
   <link rel="stylesheet" href=" <?php echo base_url(); ?>47admin/vendor/animo/animate+animo.css">
   <link rel="stylesheet" href=" <?php echo base_url(); ?>47admin/vendor/csspinner/csspinner.min.css">
   <!-- START Page Custom CSS-->
    <!-- Data Table styles-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/datatable-bootstrap/css/dataTables.bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/ColVis/css/dataTables.colVis.css">
   <!-- END Page Custom CSS-->
   <!-- App CSS-->
   <link rel="stylesheet" href=" <?php echo base_url(); ?>47admin/app/css/app.css">
   <!-- Modernizr JS Script-->
   <script src=" <?php echo base_url(); ?>47admin/vendor/modernizr/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src=" <?php echo base_url(); ?>47admin/vendor/fastclick/fastclick.js" type="application/javascript"></script>


   <!--Estilos para las Tablas-->
   <style type="text/css"></style>






</head>

<body>
   <!-- START Main wrapper-->
   <section class="wrapper">
      <!-- START Top Navbar-->
      <nav role="navigation" class="navbar navbar-default navbar-top navbar-fixed-top">
         <!-- START navbar header-->

         <div class="navbar-header">
 
            <a href="" class="navbar-brand">
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
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="nav navbar-nav navbar-right">

               <li class="dropdown">
                  <a href=" <?php echo base_url(); ?>47admin/#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                     <em class="fa fa-user"></em>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">

                     <li class="divider"></li>
    <!--                  <li><a href=" <?php echo base_url(); ?>47admin/#">Perfil</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Ajustes</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Notificaciones<div class="label label-info pull-right">5</div></a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Mensajes<div class="label label-danger pull-right">10</div></a>
                     </li> -->
                     <li><a href="<?php echo base_url(); ?>index.php/usuarios/logout">Cerrar Sesión</a>
                     </li>
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
            </ul>
            <!-- END Right Navbar-->
         </div>
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
<!--                      <li><a href=" <?php echo base_url(); ?>47admin/#">Perfil</a>
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
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/dashboard-noprofile.html" title="No Profile" data-toggle="" class="no-submenu">
                           <span class="item-text">Cerrar Sesión</span>
                        </a>
                     </li> -->
                  </ul>
                  <!-- END SubMenu item-->
               </li>
               



               <?php

               $idusuario = $this->session->userdata('idusuario');
               $consult = $this->usuario_model->obtenercargo($idusuario);
               $rol = $consult[0]->rolusuario;


               if ($rol == 'Administrador' ) {
               ?>


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



               <?php
               }
               ?>







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
                        <a href="" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Lista de Clientes</span>
                        </a>
                     </li>
   <!--                   <li>
                        <a href=" <?php echo base_url(); ?>47admin/form-extended.html" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">Agregar Cliente</span>
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






               <?php

               $idusuario = $this->session->userdata('idusuario');
               $consult = $this->usuario_model->obtenercargo($idusuario);
               $rol = $consult[0]->rolusuario;


               if ($rol == 'Administrador' ) {
               ?>


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



               <?php
               }
               else
               {
                  ?>
                  <li>
                  <a href=" <?php echo base_url(); ?>47admin/#" title="Forms" data-toggle="collapse-next" class="has-submenu">
                     <em class="fa fa-money fa-2x"></em>
                     <span class="item-text">Ventas</span>
                  </a>
                  <!-- START SubMenu item-->
                  <ul class="nav collapse ">
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/ventas/listaventas" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Realizar una Venta</span>
                        </a>
                     </li>
 <!--                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/form-extended.html" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">Reporte Ventas</span>
                        </a>
                     </li> -->
                  </ul>
                  <!-- END SubMenu item-->
               </li>
                  <?php
               }
               ?>









<!-- 
               <li>
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
            <?php 
               $atributos = array('class' => 'form-group', 'idproducto' => 'myform');
               echo form_open_multipart('productos/agregar',$atributos); ?>
               <center>
                  <button type="submit" class="btn btn-labeled btn-primary pull-right">
                 <span class="btn-label"><i class="fa fa-plus-circle"></i></span>
                  Agregar Nuevo Producto</button>
               </center>
            <?php echo form_close(); ?>

                
            <div class="titulo">
              <center><h1>Lista de Productos</h1></center>
            </div>

              <div class="row">

               <div class="col-lg-12">

                  <div class="panel panel-default">

                      <div class="parrafo">
                        <div class="table-responsive">
                          
                        <table id="datatable1" class="table table-striped table-hover">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th>Descripción</th>
                                 <th>Cantidad</th>
                                 <th>Costo Base</th>
                                 <th>Precio Base</th>
                                 <th>Categoría</th>
                                 <th>Modificar</th>
                                 <th>Eliminar</th>
                              </tr>
                           </thead>
                           <tbody>
                           <?php
                              $indice=1;
                              foreach ($productos->result() as $row)
                              {
                           ?>
                              <tr class="gradeX">
                                 <th><?php echo $indice; ?></th>
                                 <td ><?php echo $row->descripcion; ?></td>
                                 <td ><?php echo $row->cantidad; ?></td>
                                 <td ><?php echo $row->costobase; ?></td>
                                 <td ><?php echo $row->preciobase; ?></td>
                                 <td ><?php echo $row->categoria; ?></td>
                                 <td>
                                    <center>
                                       <?php
                                       $atributos = array('class' => 'form-group','idproducto' => 'myform');
                                       echo form_open_multipart('productos/modificar',$atributos); 
                                       ?>
                                       <input type="hidden" name="idproducto" value="<?php echo $row->idproducto ?>">
                                       <button type="submit" class="btn btn-primary btn">Modificar</button>
                                       <?php echo form_close(); ?>
                                    </center>
                                 </td>
                                  <td>
                                   <center>
                                       <?php
                                       $atributos = array('class' => 'form-group', 'idproducto' => 'myform');
                                       echo form_open_multipart('productos/eliminarbd',$atributos); ?>
                                       <input type="hidden" name="idproducto" value="<?php echo $row->idproducto; ?>">
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
                     
                        </div>
                      </div>
                  </div>
               
               </div>
            
             </div>





























         </section>
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
   <!-- Data Table Scripts-->
   <script src="<?php echo base_url(); ?>47admin/vendor/datatable/media/js/jquery.dataTables.min.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrap.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrapPagination.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/ColVis/js/dataTables.colVis.min.js"></script>
   <!-- END Page Custom Script-->
   <!-- END Page Custom Script-->
   <!-- App Main-->
   <script src=" <?php echo base_url(); ?>47admin/app/js/app.js"></script>
   <!-- END Scripts-->
</body>

</html>
