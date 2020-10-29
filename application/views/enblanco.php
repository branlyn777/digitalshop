
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
                   <h1>&nbsp Digital Shop</h1>
               </div>
            </center>
            <br>
            <br>
            <br>
            <div class="row">


            </div>
         </section>
         <!-- END Page content-->
      </section>
      <!-- END Main section-->
   </section>
   <!-- END Main wrapper-->
   