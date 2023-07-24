<?php include 'vistas/plantilla/encabezado.php'; ?>
<div class="wrapper">
    <?php 
        require 'vistas/plantilla/nav.php'; 
        require 'vistas/plantilla/menulateral.php';
        require 'vistas/plantilla/contenidotitulo.php';
    ?>
    <?php
ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);
//phpinfo();
?>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid" style="width: 150%;">
          <h5 class="mb-2 mt-4">Listado de sus direcciones</h5>
          <div class="row">
            <!-- Left col -->
            <div class="col-md-8">
              <!-- TABLE: LATEST ORDERS -->
              <div class="card">
                <div class="card-header border-transparent">
                  <h3 class="card-title">Información general</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="table-responsive">
                    <table class="table m-0">
                      <thead>
                      <tr>
                        <th>ID</th>
                        <th>CLIENTEID</th>
                        <th>DIRECCION</th>
                        <th>FECHA CREADA</th>
                      </tr>
                      </thead>
                      <tbody>
                      <?php foreach($this->datos as $row){ ?>
                        <tr>
                          <td><a href="/cargos/bucarid?id=<?php echo $row['id']; ?>"> <?php echo $row['id']; ?> </a></td> 
                          <td><?php echo $row['clienteid']; ?></td>
                          <td><?php echo $row['direccion']; ?></td>
                          <td>
                            <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $row['creada']; ?></div>
                          </td>
                        </tr>  
                      <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.table-responsive -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer clearfix">
                  <a href="javascript:void(0)" class="btn btn-sm btn-info float-left">Generar nuevo pedido</a>
                  <a href="javascript:void(0)" class="btn btn-sm btn-secondary float-right">Buscar pedido</a>
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
            </div>
            <!-- Fin columna izquierda -->
          </div>
          <!-- Fin primera fila -->
        </div>
    </section>
<?php include 'vistas/plantilla/pie.php'; ?>
<!-- Aqui agregar script adicionales -->
<?php include 'vistas/plantilla/script.php'; ?>