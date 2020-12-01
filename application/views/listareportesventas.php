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
                     </li>
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
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Mensajes<div class="label label-success pull-right">300</div></a> -->
                     </li>
                     <li class="divider"></li>
                     <li><a href="<?php echo base_url(); ?>index.php/usuarios/logout">Cerrar Sesión</a>
                     </li>
                  </ul>
                  <!-- END User links collapse-->
               </li>
               <!-- END user info-->
               <!-- START Menu-->
               <li class="active">
                  <a href=" <?php echo base_url(); ?>47admin/dashboard.html" title="Inicio" data-toggle="collapse-next" class="has-submenu">
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
<!--                      <li>
                        <a href="<?php echo base_url(); ?>index.php/usuarios/maps2" title="Radial" data-toggle="" class="no-submenu">
                           <span class="item-text">Mapas</span>
                        </a>
                     </li>  -->                    
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
                        <a href=" <?php echo base_url(); ?>47admin/form-standard.html" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Lista de Clientes</span>
                        </a>
                     </li>
  <!--                    <li>
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
                        <a href="" title="Extended" data-toggle="" class="no-submenu">
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
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/form-extended.html" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">--------</span>
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

            </ul>
         </nav>
         <!-- END Sidebar (left)-->
      
      </aside>
      <!-- End aside-->

      <!-- START Main section-->
      <section>
         <!-- START Page content-->
         <section class="main-content">


            <div class="row">
               <div class="col-lg-12">
                  <div class="titulo">
                    <center><h1>Reporte de Ventas</h1></center>
                  </div>
               </div>
            </div>

            <br>





















             <?php
                $atributos = array('class' => 'form-group', 'idproducto' => 'myform');
                echo form_open_multipart('reportes/listareporteventasfiltrar',$atributos);
             ?>
  
            <div class="row">
               <div class="col-lg-6">
               <center>
                  <div class="form-group row">
                 <label for="example-datetime-local-input" class="col-2 col-form-label">Fecha de Inicio</label>
                 <div class="col-10">
                   <input name="fechainicio" style="width: 217px;" class="form-control" type="datetime-local" value="<?php echo $inicio ?>" id="example-datetime-local-input">
                 </div>
               </center>
               </div>
               <div class="col-lg-6">
               <center>
                  <div class="form-group row">
                    <label for="example-datetime-local-input" class="col-2 col-form-label">Fecha de Fin</label>
                    <div class="col-10">
                      <input name="fechafin" style="width: 217px;" class="form-control" type="datetime-local" value="<?php echo $fin ?>" id="example-datetime-local-input">
                    </div>
               </center>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-12">
                  <center>
                 <button type="submit" class="btn btn-primary btn">Filtrar Datos por Fecha</button>
               </center>
                  <?php
                    echo form_close();
                  ?>
               </div>
               
            </div>





























            <br>

              <div class="row">

               <div class="col-lg-12">

                  <div class="panel panel-default">

                      <div class="parrafo">
                        <div class="table-responsive">
                          
                        <table id="datatable1" class="table table-striped table-hover">
                           <thead>
                              <tr>
                                 <th>No</th>
                                 <th >Usuario</th>
                                 <th style="text-align: center;">Fecha de Venta</th>
                                 <th>Nombre Cliente</th>
                                 <th style="text-align: center;">Unidades Vendidas</th>
                                 <th style="text-align: center;">Total Recaudado Bs</th>
                                 <th style="text-align: center;">Detalles</th>
                              </tr>
                           </thead>
                           <tbody>
                           <?php
                              $indice=1;
                              foreach ($reportes->result() as $row)
                              {
                           ?>
                              <tr class="gradeX">
                                 <th><?php echo $indice; ?></th>
                                 <td ><?php echo $row->usuario; ?></td>
                                 <td align="center"><?php echo $row->fechaventa; ?></td>
                                 <td><?php echo $row->nombrecliente; ?></td>
                                 <td align="center" ><?php echo $row->unidadesvendidas; ?></td>
                                 <td align="Right"><?php echo $row->total; ?> Bs</td>
                                 <td>


                                    <!---Boton para llamar a la ventana modal---->
                                    <center>
                                       <button type="submit" class="btn btn-primary btn" data-toggle="modal" data-target="#<?php echo $row->idventa; ?>">Mostrar Detalles</button>
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






             <div class="row">
               <div class="col-lg-12">
                  <div class="titulo">
                       <center>
                        <h3>Total de Unidades Vendidas: 
                           <?php 
                           $aa = 0;

                           //print_r($reportes->result()[0]->unidadesvendidas);
                           $row_cnt = $reportes->num_rows();
                           for ($i=0; $i < $row_cnt; $i++)
                           { 
                              $aa = $aa + $reportes->result()[$i]->unidadesvendidas;
                           }
                           echo $aa ;



                            ?> Unidades
                        </h3>
                        <h3>Total General de Ventas : 




                           <?php 

                           $bb = 0;

                           //print_r($reportes->result()[0]->unidadesvendidas);
                           $row_cnt = $reportes->num_rows();
                           for ($i=0; $i < $row_cnt; $i++)
                           { 
                              $bb = $bb + $reportes->result()[$i]->total;
                           }
                           echo $bb ;


                           ?>



                         Bs</h3>
                     </center> 
                  </div>

                  
                
               </div>
             </div>





























         
         </section>
         <!-- END Page content-->
      </section>
      <!-- END Main section-->
   </section>
   <!-- END Main wrapper-->











































<!---Creación de las Ventanas Modales para la columna Detalles de la Tabla Lista Ventas---->

<?php 
      //$listadetalles = $this->venta_model->mostrardetallesventa();
      foreach ($reportes->result() as $row)
      {

         ?>
            <!-- Modal: modalCart -->
               <div class="modal fade" id="<?php echo $row->idventa; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                           $listadetalles = $this->venta_model->mostrardetallesventafactura($row->idventa);
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
                                <td><center><strong><?php echo $this->venta_model->mostrartotalprecioventafactura($row->idventa)[0]->sumacantidad; ?></strong></center></td>
                                <td align="right"><strong><?php echo $this->venta_model->mostrartotalprecioventafactura($row->idventa)[0]->sumapreciobase; ?> Bs</strong></td>
                                <td align="right"><strong><?php echo $this->venta_model->mostrartotalprecioventafactura($row->idventa)[0]->totalsumacantidadprecio; ?> Bs</strong></td>
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
                           <input type="hidden" name="idcliente" value="<?php echo $row->idventa; ?>">
                           <button type="submit" class="btn btn-primary btn">Ver Recibo de Venta en Pdf</button>
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
