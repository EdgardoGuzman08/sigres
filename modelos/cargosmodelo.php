<?php

class cargosModelo extends Modelo{
    function __construct(){
        parent::__construct();
        
    }
    public function insert($datos){
        $query = $this->db->conectar()->prepare('insert into cargos (NombreCargo, DescripcionCargo) value(:nombre, :descripcion)');
        $query->execute($datos);
    }
    public function listar(){
        $lista=[];
        try{
            $sql='select CodigoCargo, NombreCargo, DescripcionCargo from cargos';
            $query = $this->db->conectar()->query($sql);
            foreach($query as $row){
                $cargo=[
                    'id'=>$row['CodigoCargo'],
                    'nombre'=>$row['NombreCargo'],
                    'descripcion'=>$row['DescripcionCargo']
                ];
                array_push($lista, $cargo);            
            }
            return $lista;    
        }catch(\Throwable $th){
            //throw $th;
        }
    }
    public function buscarID($id){
        $lista=[];
        try{
            $sql='select CodigoCargo, NombreCargo, DescripcionCargo from cargos where CodigoCargo = ' . $id;
            $query = $this->db->conectar()->query($sql);
            foreach($query as $row){
                $cargo=[
                    'id'=>$row['CodigoCargo'],
                    'nombre'=>$row['NombreCargo'],
                    'descripcion'=>$row['DescripcionCargo']
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