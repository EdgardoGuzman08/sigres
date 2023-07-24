<?php

class mesasModelo extends Modelo{
    function __construct(){
        parent::__construct();
        
    }
    public function listar(){
        $lista=[];
        try{
            $sql='select id, app_pedidos_id, mesas_x_area_idregistro, libre from app_pedidos_mesas';
            $query = $this->db->conectar()->query($sql);
            foreach($query as $row){
                $cargo=[
                    'id'=>$row['id'],
                    'pedidosid'=>$row['app_pedidos_id'],
                    'mesasxregistro'=>$row['mesas_x_area_idregistro'],
                    'libre'=>$row['libre']
                ];            
                array_push($lista, $cargo);            
            }
            return $lista;    
        }catch(\Throwable $th){
            //throw $th;
        }
    }
    public function actualizar($id){
        try{
            $sql="update app_pedidos_mesas set libre = !libre where id = $id";
            $query = $this->db->conectar()->query($sql);
            
            return 1;    
        }catch(\Throwable $th){
            //throw $th;
        }
    }
}

?>