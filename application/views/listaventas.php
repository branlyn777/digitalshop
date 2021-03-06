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






   <!-- Bootstrap CSS-->
   <link rel="stylesheet" href=" <?php echo base_url(); ?>47admin/app/css/bootstrap.css">
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
            <!-- START Right Navbar-->
            <ul class="nav navbar-nav navbar-right">
               <!-- START Alert menu-->
               <!-- END Alert menu-->
               <!-- START User menu-->
               <li class="dropdown">
                  <a href=" <?php echo base_url(); ?>47admin/#" data-toggle="dropdown" data-play="bounceIn" class="dropdown-toggle">
                     <em class="fa fa-user"></em>
                  </a>
                  <!-- START Dropdown menu-->
                  <ul class="dropdown-menu">

                     <li class="divider"></li>
 <!--                     <li><a href=" <?php echo base_url(); ?>47admin/#">Perfil</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Ajustes</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Notificaciones<div class="label label-info pull-right">0</div></a>
                     </li> -->
                     <li><a href="<?php echo base_url(); ?>index.php/usuarios/logout">Cerrar Sesión</a>
                     </li>
                  </ul>
                  <!-- END Dropdown menu-->
               </li>
               <!-- END User menu-->
            </ul>
            <!-- END Right Navbar-->
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
                        <span class="user-block-role">
                           <?php  
                              $idusuario = $this->session->userdata('idusuario');
                              $consult = $this->usuario_model->obtenercargo($idusuario);
                              echo $consult[0]->rolusuario;
                           ?>
                        </span>
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
                     <li><a href="<?php echo base_url(); ?>index.php/usuarios/logout">Cerrar Sesión</a>
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
 <!--                     <li>
                        <a href="<?php echo base_url(); ?>index.php/usuarios/inicio" title="No Sidebar" data-toggle="" class="no-submenu">
                           <span class="item-text">Inicio 2</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/dashboard-noprofile.html" title="No Profile" data-toggle="" class="no-submenu">
                           <span class="item-text">Cerrar Sesión</span>
                        </a>
                     </li>
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/usuarios/maps2" title="Radial" data-toggle="" class="no-submenu">
                           <span class="item-text">Mapas</span>
                        </a>
                     </li>   -->                   
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
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/chart-radial.html" title="Radial" data-toggle="" class="no-submenu">
                           <span class="item-text">Estado Usuarios</span>
                        </a>
                     </li>
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
<!--                      <li>
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
                     <em class="fa fa-money fa-2x"></em>
                     <span class="item-text">Estado de Ventas</span>
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
                 <!--     <li>
                        <a href=" <?php echo base_url(); ?>47admin/form-extended.html" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">--------</span>
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

      <!-- START Main section-->
      <section>
         <!-- START Page content-->
         <section class="main-content">
         <!--
            <div class="fuente">
                   <center><h1>Digital Shop</h1></center>
            </div>
         -->
               <div class="col-lg-12">
                  <div class="titulo">
                  <center>
                     <h1>Lista de Ventas</h1>
                  </center>
                  </div>

              <?php 
               $atributos = array('class' => 'form-group', 'idproducto' => 'myform');
               echo form_open_multipart('ventas/agregar',$atributos); ?>
               <center>
                  <button type="submit" class="btn btn-labeled btn-primary pull-right">
                 <span class="btn-label"><i class="fa fa-plus-circle"></i></span>
                  Agregar Nueva Venta</button>
               </center>
               <?php echo form_close(); ?>
               <br>
               <br>
                  <div class="panel panel-default">

                      <div class="parrafo">
                        <div class="table-responsive">
                        <table id="datatable1" class="table table-striped table-hover">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th>Nombre Cliente</th>
                                 <th>Número de Carnet</th>
                                 <th>Cantidad Item's</th>
                                 <th>Fecha de Venta</th>
                                 <th>Observaciones</th>
                                 <th><center>Detalles</center></th>
                                 <th>Modificar</th>
                                 <th>Eliminar</th>
                              </tr>
                           </thead>
                           <tbody>
                           <?php
                              $indice=1;
                              foreach ($clientes as $row)
                              {
                           ?>
                              <tr class="gradeX">
                                 <th><?php echo $indice; ?></th>
                                 <td data-title=""><?php echo $row['razonsocial']; ?></td>
                                 <td data-title=""><?php echo $row['nit']; ?></td>
                                 <td data-title=""><center><?php echo $row['count(vp.idventa)']; ?></center></td>
                                 <!--<td data-title="Cámara Trasera"><?php echo $row['cantidad']; ?></td>-->
                                 <td data-title=""><?php echo $row['fechaventa']; ?></td>
                                 <td data-title=""><?php echo $row['observaciones']; ?></td>
                                 <td>
                                    









                                 <!-- Button trigger modal-->
                                 <center>
                                    <button type="submit" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $row['idventa']; ?>">Detalles</button>
                                 </center>













                                 </td>     
                                 <td>
                                    <center>
                                       <?php
                                       $atributos = array('class' => 'form-group','idventa' => 'myform');
                                       echo form_open_multipart('ventas/modificar',$atributos); 
                                       ?>
                                       <input type="hidden" name="idcliente" value="<?php echo $row['idventa']; ?>">
                                       <button type="submit" class="btn btn-primary btn">Modificar</button>
                                       <?php echo form_close(); ?>
                                    </center>
                                 </td>
                                  <td>
                                   <center>
                                       <?php
                                       $atributos = array('class' => 'form-group', 'idproducto' => 'myform');
                                       echo form_open_multipart('ventas/eliminarventa',$atributos); ?>
                                       <input type="hidden" name="idventa" value="<?php echo $row['idventa']; ?>">
                                       <button type="submit" class="btnBorrar btn btn-danger">Eliminar</button>
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
         </section>
         <!-- END Page content-->
      </section>
      <!-- END Main section-->
   </section>
   <!-- END Main wrapper-->
   <!-- START Scripts-->
   <!-- Main vendor Scripts-->




























<!---Creación de las Ventanas Modales para la columna Detalles de la Tabla Lista Ventas---->

<?php 
      //$listadetalles = $this->venta_model->mostrardetallesventa();
      foreach ($clientes as $row)
      {

         ?>
            <!-- Modal: modalCart -->
               <div class="modal fade" id="<?php echo $row['idventa']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                 <br>
                 <br>
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <!--Header-->
                     <div class="modal-header">
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">x</span>
                       </button>
                       <center><h4 class="modal-title" id="myModalLabel">Detalle de la Venta</h4></center>
                     </div>
                     <!--Body-->
                     <div class="modal-body">

                       <table class="table table-hover">
                         <thead>
                           <tr>
                             <th><p>#</p></th>
                             <th><p align="left">Nombre Producto</p></th>
                             <th><p><center>Cantidad</center></p></th>
                             <th><p align="right">Precio</p></th>
                             <th><p align="right">Total</p></th>
                           </tr>
                         </thead>
                         <tbody>
                           


                           <?php
                           $listadetalles = $this->venta_model->mostrardetallesventafactura($row['idventa']);
                           $num = 1;
                           foreach ($listadetalles->result() as $key)
                           {

                              ?>
                                 <tr>
                                   <th scope="row"><?php echo $num; ?></th>
                                   <td align="left"><?php echo $key->descripcion; ?></td>
                                   <td><center><?php echo $key->cantidad; ?></center></td>
                                   <td align="right"><?php echo $key->precio; ?> Bs</td>
                                   <td align="right"><?php echo $key->total; ?> Bs</td>
                                 </tr>
                              <?php
                           $num++;
                           }
                           ?>
                              <tr>
                                <th scope="row"><strong>-</strong></th>
                                <td align="left"><strong>Totales</strong></td>
                                <td><center><strong><?php echo $this->venta_model->mostrartotalprecioventafactura($row['idventa'])[0]->sumacantidad; ?></strong></center></td>
                                <td align="right"><strong><?php echo $this->venta_model->mostrartotalprecioventafactura($row['idventa'])[0]->sumapreciobase; ?> Bs</strong></td>
                                <td align="right"><strong><?php echo $this->venta_model->mostrartotalprecioventafactura($row['idventa'])[0]->totalsumacantidadprecio; ?> Bs</strong></td>
                              </tr>
                        </tbody>
                     </table>

                     </div>
                     <!--Footer-->
                     <div class="modal-footer">
                       <center>



                           <?php
                           $atributos = array('class' => 'form-group','idventa' => 'myform');
                           echo form_open_multipart('ventas/crearfactura',$atributos); 
                           ?>
                           <input type="hidden" name="idcliente" value="<?php echo $row['idventa']; ?>">
                           <button type="submit" class="btn btn-primary btn">Imprimir Recibo de Venta</button>
                           <?php echo form_close(); ?>
                        </center>
                       <!--<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>-->
                     </div>

                   </div>
                 </div>
               </div>
               <!-- Modal: modalCart -->
         <?php


      }



?>





























































<!-- Modal: modalCart 
               <div class="modal fade" id="aaaa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                 aria-hidden="true">
                 <br>
                 <br>
                 <br>
                 <br>
                 <br>
                 <br>
                 <div class="modal-dialog" role="document">
                   <div class="modal-content">
                     <div class="modal-header">
                       <h4 class="modal-title" id="myModalLabel">Detalle de la Venta</h4>
                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                         <span aria-hidden="true">×</span>
                       </button>
                     </div>
                     <div class="modal-body">

                       <table class="table table-hover">
                         <thead>
                           <tr>
                             <th>#</th>
                             <th>Nombre Producto</th>
                             <th>Precio</th>
                             <th>Cantidad</th>
                           </tr>
                         </thead>
                         <tbody>
                           <tr>
                             <th scope="row">1</th>
                             <td>dfgdfgdg</td>
                             <td>454</td>
                             <td><a><i class="fas fa-times"></i></a></td>
                           </tr>
                        </tbody>
                       </table>

                     </div>
                     <div class="modal-footer">
                       <button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
                     </div>
                   </div>
                 </div>
               </div>
                Modal: modalCart -->



















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
