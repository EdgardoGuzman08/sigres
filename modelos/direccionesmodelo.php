<?php

class direccionesModelo extends Modelo{
    function __construct(){
        parent::__construct();
        
    }
    public function insert($datos){
        $query = $this->db->conectar()->prepare('insert into clientes_direcciones (idcliente, direccion, creada) value(:clienteid, :direccion, :creada)');
        $query->execute($datos);
    }
    public function listar(){
        $lista=[];
        try{
            $sql='select id, idcliente, direccion, creada from clientes_direcciones';
            $query = $this->db->conectar()->query($sql);
            foreach($query as $row){
                $direccion=[
                    'id'=>$row['id'],
                    'clienteid'=>$row['idcliente'],
                    'direccion'=>$row['direccion'],
                    'creada'=>$row['creada']
                ];
                array_push($lista, $direccion);            
            }
            return $lista;    
        }catch(\Throwable $th){
            //throw $th;
        }
    }
    public function buscarID($id){
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
    }
}

?>