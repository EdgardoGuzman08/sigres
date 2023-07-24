    <?php include 'vistas/plantilla/encabezado.php'; ?>
    <div class="wrapper">
        <?php 
            require 'vistas/plantilla/nav.php'; 
            require 'vistas/plantilla/menulateral.php';
            require 'vistas/plantilla/contenidotitulo.php';
        ?>
        <!-- Main content -->
        <section class="content">
        <div class="container-fluid">
            <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- jquery validation -->
                <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Datos generales <small>Cargos de cliente</small></h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form id="quickForm" action="/clientes/guardar/" method="post">
                    <div class="card-body">
                    <div class="form-group">
                    <div class="form-group">
                        <label for="inputNombre">RTN</label>
                        <input type="" maxlength="14" name="rtn" class="form-control" id="inputNombre" placeholder="Escriba el RTN" required>
                    </div>

                    <div class="form-group">
                        <label for="inputNombre">Nombre</label>
                        <input type="text" name="nombre" class="form-control" id="inputNombre" placeholder="Escriba el Nombre" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="inputNombre">Direccion</label>
                        <input type="text" name="direccion" class="form-control" id="inputNombre" placeholder="Escriba la direccion" required>
                    </div>

                    <div class="form-group">
                        <label for="inputNombre">Telefono</label>
                        <input type="" maxlength="8" name="telefono" class="form-control" id="inputNombre" placeholder="Escriba su numero de telefono" required>
                    </div>

                    <div class="form-group">
                        <label for="inputNombre">Correo</label>
                        <input type="email" name="correo" class="form-control" id="inputNombre" placeholder="Escriba su correo" required>
                    </div>
                    <div action="#" method="post" encytpe="multipart/form-data">
                        <lab for="inputNombre">Seleccion su foto de perfil</lab>
                        <input type="file" name="imagen" class="form-control" id="inputNombre" placeholder="Seleccione su foto" required>
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="inputNombre">Nombre de la imagen</label>
                        <input  name="nombreimagen" class="form-control" id="inputNombre" placeholder="Escriba nombre imagen" required>
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