<html lang="es"><head>

    <title>Restaurant</title>

    <!-- Bootstrap Core CSS -->
    <link href="/vistas/mesas/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/vistas/mesas/css/Style-light.css" rel="stylesheet">
    <div class="container">
    <div class="row">

    <div style="margin-top: 1px; margin-right:12px; font-size: 22px" class="navbar-end">
        <div class="navbar-item">
            <div class="buttons">
                <a href="../../index.php" class="badge badge-danger">
                <strong>Volver a Inicio</strong>
                </a>
            </div>
        </div>
    </div>

        <h1 class="choose_store"> Restaurante </h1>
        <hr>
    </div>
    <div class="row tablesrow">
        <?php
    
        foreach($this -> mesas as $i => $mesa){
        
        ?>
        <form class="link_table" action="http://192.168.1.12:8080/mesas/actualizar" method="POST">
            <input type="text" name="id" value="<?= $mesa["id"] ?>" hidden>
            <label class="col-sm-2 col-xs-4 tableList" style="background-color: #14e25f;" "="">
                <span class="badge_table"><?= $mesa["libre"] ? "libre":"ocupado" ?></span>
                <img src="/vistas/mesas/img/table.svg" alt="store" >
                <h2>Meza <?php echo $i+1 ?></h2>
                <input type="submit" hidden>
        </label>
        </form>
        <?php } ?>
        <br>
        <br>
        <br>
    </div>
</html>