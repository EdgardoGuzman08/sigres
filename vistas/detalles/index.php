    <?php include 'vistas/plantilla/encabezado.php'; ?>
    <div class="wrapper">
        <?php 
            require 'vistas/plantilla/nav.php'; 
            require 'vistas/plantilla/menulateral.php';
            require 'vistas/plantilla/contenidotitulo.php';
        ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid" style="width: 150%"> 
            <br><br><br><br>
            <div class="row">
                <!-- Left col -->
                <div class="col-md-8">
                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                    <h3 class="card-title">Información general de sus pedidos</h3>

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
                            <th>Codigo del detalle de pedido</th>
                            <th>ID pedido</th>
                            <th>ID producto</th>
                            <th>Cantidad</th>
                            <th>Anulado</th>
                            <th>Recibido</th>
                            <th>Entregado</th>
                            <th>Facturado</th>
                            <th>Nota</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php foreach($this->datos as $row){ ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['pedidosid']; ?></td>
                            <td>
                            <div class="sparkbar" data-color="#f39c12" data-height="20"><?php echo $row['productosid']; ?></div>
                            </td>
                            <td><?php echo $row['cantidad']; ?></td>
                            <td><span style="font-size: 16px;" class="badge badge-danger"><?php echo $row['anulado']; ?></span></td>
                            <td><span style="font-size: 16px;" class="badge badge-success"><?php echo $row['recibido']; ?></span></td>
                            <td><span style="font-size: 16px;" class="badge badge-info"><?php echo $row['entregado']; ?></span></td>
                            <td><span style="font-size: 16px;" class="badge badge-warning"><?php echo $row['facturado']; ?></span></td>
                            <td><span style="font-size: 16px;"><?php echo $row['nota']; ?></span></td>
                            <td> <a href="/detalles/delete" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                                </a></td>
                        </tr>
                        <?php } ?>
                        </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                    </div>
                    <!-- /.card-footer -->
                </div>
                <!-- /.card -->
                </div>
                <!-- Fin columna izquierda -->

                <!-- Fin columna derecha -->
            </div>
            <!-- Fin primera fila -->
            </div>
        </section>
    <?php include 'vistas/plantilla/pie.php'; ?>
    <?php include 'vistas/plantilla/script.php'; ?>