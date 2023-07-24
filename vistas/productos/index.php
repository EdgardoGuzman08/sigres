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
        <!--<h3> <?php //var_dump($this->datos); ?></h3>-->
            <div class="container-fluid">
            <div class="row">
            <div class="col-lg-2 col-6 /productos/bucarid?id=<?php echo $row['id']; ?>">
                <!-- small card -->
                <div class="small-box bg-info /productos/bucarid?id=<?php echo $row['id']; ?>">
                <div class="inner">
                <?php foreach($this->datos as $row){ ?>
                    <p><?php echo $row['codigo']; ?></p>
                    <?php } ?>
                </div>
                <div class="icon">
                    <i class="fas"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Order <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-6">
                <!-- small card -->
                <div class="small-box bg-success">
                <div class="inner">
                <?php foreach($this->datos as $row){ ?>
                    <p><?php echo $row['codigo']; ?></p>
                    <p><?php echo $row['nombreproductos']; ?></p>
                    <p><?php echo $row['precioproductos']; ?></p>
                    <?php } ?>
                </div>
                <div class="icon">
                    <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Order <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-6">
                <!-- small card -->
                <div class="small-box bg-warning">
                <div class="inner">
                <?php foreach($this->datos as $row){ ?>
                    <p><?php echo $row['codigo']; ?></p>
                    <p><?php echo $row['nombreproductos']; ?></p>
                    <p><?php echo $row['precioproductos']; ?></p>
                <?php } ?>
                </div>
                <div class="icon">
                    <i class="fas"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Order <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-2 col-6">
                <!-- small card -->
                <div class="small-box bg-danger">
                <div class="inner">
                <?php foreach($this->datos as $row){ ?>
                    <p><?php echo $row['codigo']; ?></p>
                    <p><?php echo $row['nombreproductos']; ?></p>
                    <p><?php echo $row['precioproductos']; ?></p>
                <?php } ?>
                </div>
                <div class="icon">
                    <i class="fas"></i>
                </div>
                <a href="#" class="small-box-footer">
                    Order <i class="fas fa-arrow-circle-right"></i>
                </a>
                </div>
            </div>
            <!-- ./col -->
            </div>
            </div>
        </section>
    <?php include 'vistas/plantilla/pie.php'; ?>
    <!-- Aqui agregar script adicionales -->
    <?php include 'vistas/plantilla/script.php'; ?>