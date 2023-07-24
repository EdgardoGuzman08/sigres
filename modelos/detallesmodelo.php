<?php

class detallesModelo extends Modelo{
    function __construct(){
        parent::__construct();
        
    }
    public function insert($datos){
        $query = $this->db->conectar()->prepare('insert into app_detalle_pedidos (app_pedidos_id, productos_Codigo, cantidad, anulado, recibido, entregado, facturado, nota) value(:pedidosid, :productosid, :cantidad, :anulado, :recibido, :entregado, :facturado, :nota)');
        $query->execute($datos);
    }
    public function listar(){
        $lista=[];
        try{
            $sql='select id, app_pedidos_id, productos_Codigo, cantidad, anulado, recibido, entregado, facturado, nota from app_detalle_pedidos';
            $query = $this->db->conectar()->query($sql);
            foreach($query as $row){
                $cargo=[
                    'id'=>$row['id'],
                    'pedidosid'=>$row['app_pedidos_id'],
                    'productosid'=>$row['productos_Codigo'],
                    'cantidad'=>$row['cantidad'],
                    'anulado'=>$row['anulado'],
                    'recibido'=>$row['recibido'],
                    'entregado'=>$row['entregado'],
                    'facturado'=>$row['facturado'],
                    'nota'=>$row['nota'],
                ];            
                array_push($lista, $cargo);            
            }
            return $lista;    
        }catch(\Throwable $th){
            //throw $th;
        }
    }
    public function delete($id){
        try
        {
            $stm = $this->pdo->prepare("DELETE FROM $this->app_detalle_pedidos WHERE id=?");
            $stm->execute(array($id));
        }
        catch (PDOException $e)
        {
            die($e->getMessage());
        }
    }
    /* public function delete($id){
        $lista=[];
        try{
            $sql='select clienteid, direccion, creada from clientes_direcciones where clienteid = ' . $id;
            $query = $this->db->conectar()->query($sql);
            foreach($query as $row){
                $cargo=[
                    'clienteid'=>$row['idcliente'],
                    'direccion'=>$row['direccion'],
                    'creada'=>$row['creada']
                ];
                array_push($lista, $cargo);            
            }
            return $lista;    
        }catch(\Throwable $th){
            //throw $th;
        }
    }*/
}

?>