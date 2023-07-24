<?php include 'vistas/plantilla/encabezado.php'; ?>
    <div class="wrapper">
        <?php 
            require 'vistas/plantilla/nav.php'; 
            require 'vistas/plantilla/menulateral.php';
            require 'vistas/plantilla/contenidotitulo.php';
            
        ?>
        <?php include("/configuraciones/basedatos.php"); ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid" style="width: 150%;">
            <h5 class="mb-2 mt-4">Listado de pedidos</h5>
            <div class="row">
                <!-- Left col -->
                <div class="col-md-8">
                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                    <h3 class="card-title">Información Pedidos</h3>

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
                            <th>CODIGO-PEDIDO</th>
                            <th>CODIGO-USUARIO-CLIENTE</th>
                            <th>FECHA-HORA</th>
                            <th>ACTIVO</th>
                            <th>CODIGO-REGISTRO</th>
                            <th>FECHA-MODIFICACION</th>
                        </tr>
                        </thead>
                        <tbody style="font-size: 20px;">
                        <?php foreach($this->datos as $row){ ?>
                            <tr>
                            <td><a href="/pedidos/bucarid?id=<?php echo $row['id']; ?>"> <?php echo $row['id']; ?> </a></td> 
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $row['UsuarioClienteId']; ?></div>
                            </td>
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $row['Fecha_Hora']; ?></div>
                            </td>
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $row['EstadoActivo']; ?></div>
                            </td>
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $row['UsuarioIdRegistro']; ?></div>
                            </td>
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $row['FechaModificado']; ?></div>
                            </td>
    
                            <td>
                                <a href="/pedidos/eliminarid?id=<?php echo $row['id']?>" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                                </a>
                            </td>
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
            </div>
            <!-- Fin primera fila -->
            </div>
        </section>
    <?php include 'vistas/plantilla/pie.php'; ?>
    <!-- Aqui agregar script adicionales -->
    <?php include 'vistas/plantilla/script.php'; ?>