    <?php include 'vistas/plantilla/encabezado.php'; ?>
    <div class="wrapper">
        <?php 
            require 'vistas/plantilla/nav.php'; 
            require 'vistas/plantilla/menulateral.php';
            require 'vistas/plantilla/contenidotitulo.php';
        ?>
    <?php
    $n1=10;
    $n2=20;
    $r=$n1+$n2;
    ?>
        <!-- Main content -->
        <section class="content">
        <div class="container-fluid" style="width: 70%;">
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Datos de<small>Cliente Direccion </small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" action="/direcciones/guardar/" method="post">
                    <div class="card-body">
                    <div class="form-group">
                        <label style="margin-left: 20px;" for="inputNombre">Codigo de la direccion</label>
                        <input style="margin-left: 20px; width: 46%" type="number" min="1" max="100" name="clienteid" class="form-control" id="inputNombre" placeholder="Escriba su id de registro" required>
                    </div>
                    <div class="card-body">
                    <div class="form-group2">
                        <label for="inputNombre">Direccion</label>
                        <input style="width: 30%; width: 48%" type="text" name="direccion" class="form-control" id="inputNombre" placeholder="Escriba su direccion" required>
                    </div>
                    <br>
                    <div class="card-body">
                    <div class="form-group3">
                        <label style="margin-left: -20px;" for="inputNombre">Fecha creacion de su direccion</label>
                        <input style="margin-left: -20px; width: 50%" type="date" name="creada" class="form-control" id="inputNombre" placeholder="formato DD/MM/YYYY" required>
                    </div>
                    </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary toastrDefaultSuccess">Guardar</button>
                    </div>
                </form>
                </div>
                <!-- /.card -->
                </div>
            <!--/.col (left) -->
            <!-- right column -->
            <div class="col-md-6">

            </div>
            <!--/.col (right) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    <?php include 'vistas/plantilla/pie.php'; ?>
    <!-- Aqui agregar script adicionales -->
    <!-- jquery-validation -->
    <script src="/public/plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="/public/plugins/jquery-validation/additional-methods.min.js"></script>
    <?php include 'vistas/plantilla/script.php'; ?>