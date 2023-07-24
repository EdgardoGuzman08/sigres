<?php 
  session_start();
  $usuario = $_SESSION['s_usuario'];
?>
<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="/public/img/logo_sigres.png" alt="Logo SIGRES" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIGRES</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <!--<div class="image">
          <img src="/public/img/Screenshot_20220616-152452_Gallery.jpg" class="img-circle elevation-2" alt="Imagen de usuario">
        </div>-->
        <div class="info">
          <a href="../../index1.php" class="d-block">Bienvenido (a)<br><?php echo $usuario; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
              with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="/" class="nav-link active">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Tablero de control
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item menu-open">
            <a href="/pedidos/inicio" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>
                Pedidos
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/productos/inicio" class="nav-link">
            <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                food Menu
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/detalles/inicio" class="nav-link">
            <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Detalle del Pedidos
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/mesas/inicio" class="nav-link">
            <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Mesas Disponibles
              </p>
            </a>
          </li>
          <li class="nav-item">
          <a href="/" class="nav-link">
            <i class="nav-icon fas fa-address-card"></i>
            <p>
              Informacion Cliente
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="/clientes/inicio" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Liste su informacion</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/clientes/nuevo" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Creacion de usuario</p>
              </a>
            </li>
          </ul>
        </li>
          <li class="nav-item">
          <a href="/" class="nav-link">
            <i class="nav-icon fas fa-compass"></i>
            <p>
              Direccion Cliente
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview" style="display: none;">
            <li class="nav-item">
              <a href="/direcciones/inicio" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Vista Direccion</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="direcciones/nuevo" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Nuevo Direccion</p>
              </a>
            </li>
          </ul>
        </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>