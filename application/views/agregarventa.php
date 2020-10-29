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
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/slider/css/slider.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/chosen/chosen.min.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/datetimepicker/css/bootstrap-datetimepicker.min.css">
<!-- Codemirror -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/codemirror/lib/codemirror.css">
   <!-- Bootstrap tags-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/tagsinput/bootstrap-tagsinput.css">
   <!-- END Page Custom CSS-->
   <!-- App CSS-->
   <link rel="stylesheet" href=" <?php echo base_url(); ?>47admin/app/css/app.css">
   <!-- Modernizr JS Script-->
   <script src="<?php echo base_url(); ?>47admin/vendor/modernizr/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src="<?php echo base_url(); ?>47admin/vendor/fastclick/fastclick.js" type="application/javascript"></script>



   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/app/css/fonts.css">
   <!-- Bootstrap CSS-->
   <!-- Vendor CSS-->
   <!-- START Page Custom CSS-->
    <!-- Data Table styles-->
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/datatable-bootstrap/css/dataTables.bootstrap.css">
   <link rel="stylesheet" href="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/ColVis/css/dataTables.colVis.css">
   <!-- END Page Custom CSS-->
   <!-- App CSS-->

     <!--Estilos para las Tablas-->
   <style type="text/css">
      





   </style>
   
   <!-- Modernizr JS Script-->
   <script src=" <?php echo base_url(); ?>47admin/vendor/modernizr/modernizr.js" type="application/javascript"></script>
   <!-- FastClick for mobiles-->
   <script src=" <?php echo base_url(); ?>47admin/vendor/fastclick/fastclick.js" type="application/javascript"></script>

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
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Perfil</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Ajustes</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Notificaciones<div class="label label-info pull-right">0</div></a>
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
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Perfil</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Ajustes</a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Notificaciones<div class="label label-danger pull-right">120</div></a>
                     </li>
                     <li><a href=" <?php echo base_url(); ?>47admin/#">Mensajes<div class="label label-success pull-right">300</div></a>
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
                     <li>
                        <a href="<?php echo base_url(); ?>index.php/usuarios/maps2" title="Radial" data-toggle="" class="no-submenu">
                           <span class="item-text">Mapas</span>
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
                        <a href=" <?php echo base_url(); ?>47admin/form-standard.html" title="Standard" data-toggle="" class="no-submenu">
                           <span class="item-text">Lista de Clientes</span>
                        </a>
                     </li>
                     <li>
                        <a href=" <?php echo base_url(); ?>47admin/form-extended.html" title="Extended" data-toggle="" class="no-submenu">
                           <span class="item-text">Agregar Cliente</span>
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
               ?>





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
            <div class="titulo">
               <center>
                  <h3>Agregar Nueva Venta</h3>
                  <br>
                  <br>
               </center>
            </div>
            <div class="parrafo">


                      <?php  
            $idusuario = $this->session->userdata('idusuario');
         ?>
          <?php
          $atributos = array('class' => 'form-group', 'id' => 'myform', 'idusuario' => $idusuario);
          echo form_open_multipart('ventas/agregarbd',$atributos);
          ?>


            <div class="col-lg-4">            
                  <div class="form-group">
                     <label>Seleccione al Cliente</label>
                     <div>
                        <select id="cliente" onchange='cambioOpciones();' style="width: 340px;" class="form-control form-control-lg">
                           <?php
                              $clientela = $this->venta_model->obtenerclientes();
                              foreach ($clientela->result() as $row)
                              {


                              echo '<option value="'.$row->razonsocial.'">'
                              ?><?php echo $row->razonsocial; ?></option>


                              <?php
                                    
                                 }
                              ?>

                        </select>
                     </div>
                     <br>











                        <label>Crear Nuevo Cliente</label>
                        <input type="checkbox" onclick="checkFluency()"  id="fluency" />
                  </div>

                  


                  <div class="form-group">
                     <label>Nombre Completo Cliente</label>
                     <input disabled type="text" placeholder="" minlength="5" id="nombre" class="form-control" name="razonsocial" required pattern="[A-Za-z0-9| ]+" title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 17">
                  </div>
               <div class="form-group">
                     <label>Número de Carnet</label>
                     <input disabled type="text" placeholder="" minlength="7" maxlength="10" id="carnet" class="form-control" name="nit" required="" required pattern="[A-Za-z0-9]+" title="Letras y números. Tamaño mínimo: 7. Tamaño máximo: 10">
               </div>
                  

               </div>
            <div class="col-lg-4">
                   <label>Seleccione el Género</label>
                        <select disabled id="genero" style="width: 120px;"  class="form-control form-control-lg" name="genero">
                          <option>Masculino</option>
                          <option>Femenino</option>
                        </select>
                        <br>
                  <div class="form-group">
                     <label>Observaciones</label>
                     <input type="text" placeholder="" id="" value="Ninguna" class="form-control" name="observaciones" required pattern="[A-Za-z0-9| ]+" title="Letras y números. Tamaño mínimo: 5. Tamaño máximo: 17">
                  </div>

            </div>
            <div class="col-lg-4">
               <label>Seleccione el Producto</label>
               <!---onchange="actualizarvalue()"--->
                  <select style="width: 300px;" name="idproducto" class="chosen-select">
                           <?php
                              $prod = $this->venta_model->obtenerdatosprod();
                              foreach ($prod->result_array() as $row)
                              {
                           

                                 echo '<option value="'.$row['idproducto'].'">'
                                 ?><?php echo $row['descripcion']; ?> - <?php echo $row['preciobase']; ?> Bs</option>

                           <?php
                                 
                              }
                           ?>

                  </select>
                  <br>
                  <br>
               <label>Selecciona la Cantidad</label>
               <input class="form-control" style="width: 70px;" type="number" required="" name="cantidad">
            </div>
               






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
                     <button type="submit" class="btn btn-primary btn">Vender los Productos Seleccionados</button>
                  </center>

               <?php
                 echo form_close();
               ?>
               
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
   <!-- Markdown Area Codemirror and dependencies -->
   <script src="<?php echo base_url(); ?>47admin/vendor/codemirror/lib/codemirror.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/codemirror/addon/mode/overlay.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/codemirror/mode/markdown/markdown.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/codemirror/mode/xml/xml.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/codemirror/mode/gfm/gfm.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/marked/marked.js"></script>
   <!-- MomentJs and Datepicker-->
   <script src="<?php echo base_url(); ?>47admin/vendor/moment/min/moment-with-langs.min.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
   <!-- Tags input-->
   <script src="<?php echo base_url(); ?>47admin/vendor/tagsinput/bootstrap-tagsinput.min.js"></script>
   <!-- Input Mask-->
   <script src="<?php echo base_url(); ?>47admin/vendor/inputmask/jquery.inputmask.bundle.min.js"></script>
   <!-- END Page Custom Script-->
   <!-- App Main-->
   <script src=" <?php echo base_url(); ?>47admin/app/js/app.js"></script>
   <!-- END Scripts-->
   <!-- Data Table Scripts-->
   <script src="<?php echo base_url(); ?>47admin/vendor/datatable/media/js/jquery.dataTables.min.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrap.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/datatable-bootstrap/js/dataTables.bootstrapPagination.js"></script>
   <script src="<?php echo base_url(); ?>47admin/vendor/datatable/extensions/ColVis/js/dataTables.colVis.min.js"></script>
   <!-- END Page Custom Script-->

<<?php 
   
   $a = "7845169";

 ?>
 

<script type="text/javascript">
   function checkFluency()
   {
     var checkbox = document.getElementById('fluency');
     if (checkbox.checked == true)
     {
       document.getElementById('nombre').disabled = false;
       document.getElementById('carnet').disabled = false;
       document.getElementById("genero").disabled = false;
       document.getElementById("cliente").disabled = true;

       document.getElementById('nombre').value = "";
       document.getElementById('carnet').value = "";
       document.getElementById("cliente").value = "";

     }
     else
     {
       document.getElementById('nombre').disabled = true;
       document.getElementById('carnet').disabled = true;
       document.getElementById("genero").disabled = true;
       document.getElementById("cliente").disabled = false;
     }
   }


      function cambioOpciones()
      {
         
        var idcliente = document.getElementById("cliente").value;

        document.getElementById('nombre').value = idcliente;

        document.getElementById('carnet').value = "<?php echo $a; ?>"; 

        document.getElementById('genero').value = "Femenino";
        

      }
      function contarsi()
      {

        var checkboxes = document.getElementById('datatable1').checkbox;
        var contador = 0;
        for (var i = 0 ; i < checkboxes.lenght; i++)
        {
           contador = contador + 1;
        }
        document.getElementById('total').value = contador;
      }
      function rellenar()
      {

        var comprar = document.getElementById('marcar');
        var contador = document.getElementById('total').value;
        if (comprar.checked == true)
        {
            contador++;
            document.getElementById('total').value = contador;
        }
        else
        {
            contador--;
            document.getElementById('total').value = contador;
        }

      }
      function actualizarvalue()
      {
        var valor = document.getElementById('cantidades').value;
        alert(valor);
      }
</script>








</body>

</html>