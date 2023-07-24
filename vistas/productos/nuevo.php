    <?php include 'vistas/plantilla/encabezado.php'; ?>
    <div class="wrapper">
        <?php 
            require 'vistas/plantilla/nav.php'; 
            require 'vistas/plantilla/menulateral.php';
            require 'vistas/plantilla/contenidotitulo.php';
        ?>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid" style="width: 140%">
            <div class="row">
                <!-- Left col -->
                <div class="col-md-8">
                <!-- TABLE: LATEST ORDERS -->
                <div class="card">
                    <div class="card-header border-transparent">
                    <h3 class="card-title">Información de nuestros menu</h3>

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
                            <th>CODIGO</th>
                            <th>NOMBRE</th>
                            <th>PRECIO</th>
                            <th>IMAGEN</th>
                        </tr>
                        </thead>
                        <tbody style="font-size: 20px;">
                        
                        <?php foreach($this->datos as $row){ ?>
                            
                            <tr>
                            <td><a href="/productos/bucarid?id=<?php echo $row['id']; ?>">Combo <?php echo $row['codigo']; ?> </a></td> 
                            <td><?php echo $row['nombreproductos']; ?></td>
                            <td>
                                <div class="sparkbar" data-color="#00a65a" data-height="20"><?php echo $row['precioproductos']; ?></div>
                            </td>
                            <td><?php echo '<img height="140" width="150" src="/public/img/' .$row['imagenproductos'].'">' ?></td>
                            <td><div class="col-md-6">
                            <a class="btn btn-success" href="/carrito/AccionCarta.php?action=addToCart&Codigo=<?php echo $row["codigo"]; ?>">Agregar a la Carta</a>
                            </div></td>
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