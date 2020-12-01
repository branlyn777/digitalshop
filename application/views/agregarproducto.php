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
                     <!-- User picture
                     <div class="user-block-picture">
                        <img src=" <?php echo base_url(); ?>47admin/app/img/user/02.jpeg" alt="Avatar" width="100" height="100" class="img-thumbnail img-circle">
                        <div class="user-block-status">
                           <div class="point point-success point-lg"></div>
                        </div>
                     </div>Name and Role-->
                     <div class="user-block-info">
                        <span class="user-block-name item-text">Bienvenido, <?php echo $this->session->userdata('usuario'); ?></span>
                        <span class="user-block-role">Administrador</span>
                        <!-- END Dropdown to change status-->
                     </div>
                  </div>
                  <!-- START User links collapse-->
                  <ul class="nav collapse">
 
                     <li><a href="">Cerrar Sesión</a>
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
                        <a href="" title="No Profile" data-toggle="" class="no-submenu">
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
                        <a href="" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Lista de Clientes</span>
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
<!--                      <li>
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






















            </ul>
         </nav>
         <!-- END Sidebar (left)-->
      </aside>
      <!-- End aside-->

      <!-- START Main section-->
      <section>
        <section class="main-content">
          
            <center>
              <h3>Añadir Nuevo Producto</h3>
            </center>
            <!-- START row-->
            <div class="row">
               <div class="col-sm-6">
                  <!-- START panel-->
                  <div class="panel panel-default">
                        

                         <?php
                         $atributos = array('class' => 'form-group', 'idproducto' => 'myform');
                         echo form_open_multipart('productos/agregarbd',$atributos);
                         ?>
                           <div class="form-group">
                              <label>Descripción/Nombre Dispositivo</label>
                              <input type="text" placeholder=""  class="form-control" name="descripcion" required pattern="[A-Za-z0-9| ]+" title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 17">
                           </div>
                           <div class="form-group">
                              <label>Cantidad</label>
                              <input type="text" placeholder="" class="form-control" name="cantidad" required="" required pattern="[0-9]{1,4}" title="Solo Números. Tamaño mínimo: 1. Tamaño máximo: 4">
                           </div>
                          <div class="form-group">
                              <label>Costo Base</label>
                              <input type="text" placeholder="" class="form-control" name="costobase" required="" required pattern="[0-9|.]{4,10}" title="Solo Números. Tamaño mínimo: 4 (1.00). Tamaño máximo: 10">
                           </div>
                           
                            <div class="form-group">
                              <label>Precio Base</label>
                              <input type="text" placeholder="" class="form-control" name="preciobase" required="" required pattern="[0-9|.]{4,10}" title="Solo Números. Tamaño mínimo: 4 (1.00). Tamaño máximo: 10">
                           </div> 
                  </div>
                  <!-- END panel-->
               </div>
               <div class="col-sm-6">
                  <!-- START panel-->
                  <div class="panel panel-default">


                          <div class="form-group">
                             <label>Categoría</label>
                             <br>
                                <SELECT name="categoria" class="form-control m-b" onchange="
                                if (this.value=='Smartphone')
                                 {
                                    document.getElementById('otrocolor').disabled = false
                                 }
                                 else
                                 {
                                    document.getElementById('otrocolor').disabled = true
                                 } 
                                 ">
                                 <option>Accesorio</option>
                                 <option value="Smartphone">Smartphone</option>
                                 </SELECT>
                                
                               <!--<input type="text" id="otrocolor" name="color" size="12" value="Otro color" disabled class="form-control">-->
                          </div>
                          <!--
                           <div class="form-group">
                              <label>Almacenamiento</label>
                              <input type="text" id="otrocolor" name="color" disabled class="form-control">
                           </div>
                           -->


                     <br>
                     <br>
                     <br>
                     <br>
                     <br>
                     <br>




                  </div>
                  <!-- END panel-->
               </div>






                  


               <center>
                 <button type="submit" class="btn btn-primary btn">Añadir Nuevo Dispositivo</button>
               </center>
               <?php
                 echo form_close();
               ?>












            </div>
            <!-- END row-->
         
        </section>
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
