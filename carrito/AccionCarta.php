<?php
date_default_timezone_set("America/Tegucigalpa");
// Iniciamos la clase de la carta
include 'La-carta.php';
$cart = new Cart;

// include database configuration file
include 'Configuracion.php';
if(isset($_REQUEST['action']) && !empty($_REQUEST['action'])){
    if($_REQUEST['action'] == 'addToCart' && !empty($_REQUEST['Codigo'])){
        $productID = $_REQUEST['Codigo'];
        // get product details
        $query = $db->query("SELECT * FROM productos WHERE Codigo = ".$productID);
        $row = $query->fetch_assoc();
        $itemData = array(
            'Codigo' => $row['Codigo'],
            'Nombre' => $row['Nombre'],
            'IMAGEN' => $row['IMAGEN'],
            'Precio' => $row['Precio'],
            'qty' => 1
        );
        
        $insertItem = $cart->insert($itemData);
        $redirectLoc = $insertItem?'VerCarta.php':'index.php';
        header("Location: ".$redirectLoc);
    }elseif($_REQUEST['action'] == 'updateCartItem' && !empty($_REQUEST['Codigo'])){
        $itemData = array(
            'rowid' => $_REQUEST['Codigo'],
            'qty' => $_REQUEST['qty']
        );
        $updateItem = $cart->update($itemData);
        echo $updateItem?'ok':'err';die;
    }elseif($_REQUEST['action'] == 'removeCartItem' && !empty($_REQUEST['Codigo'])){
        $deleteItem = $cart->remove($_REQUEST['Codigo']);
        header("Location: VerCarta.php");
    }elseif($_REQUEST['action'] == 'placeOrder' && $cart->total_items() > 0 && !empty($_SESSION['sessCustomerID'])){
        // insert order details into database
        //$insertOrder = $db->query("INSERT INTO app_detalle_pedidos (app_pedidos_id, productos_Codigo, cantidad, anulado, recibido, entregado, facturado, nota) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
        $insertOrder = $db->query("INSERT INTO app_pedidos (usuario_clientes_id,preciototal,fechahora,fechamodificacion) VALUES ('".$_SESSION['sessCustomerID']."', '".$cart->total()."', '".date("Y-m-d H:i:s")."', '".date("Y-m-d H:i:s")."')");
        if($insertOrder){
            $orderID = $db->insert_id;
            $sql = '';
            // get cart items
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
                $sql .= "INSERT INTO app_detalle_pedidos (app_pedidos_id, productos_Codigo, cantidad) VALUES ('".$orderID."', '".$item['Codigo']."', '".$item['qty']."');";
            }
            // insert order items into database
            $insertOrderItems = $db->multi_query($sql);
            
            if($insertOrderItems){
                $cart->destroy();
                header("Location: OrdenExito.php?Codigo=$orderID");
            }else{
                header("Location: Pagos.php");
            }
        }else{
            header("Location: Pagos.php");
        }
    }else{
        header("Location: index.php");
    }
}else{
    header("Location: index.php");
}