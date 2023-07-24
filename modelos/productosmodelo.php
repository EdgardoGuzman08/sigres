<?php

class productosModelo extends Modelo{
    function __construct(){
        parent::__construct();
        
    }
    public function insert($datos){
        $query = $this->db->conectar()->prepare('insert into producto (Nombre, IMAGEN, Precio) value(:nombreproductos, :imagenproductos, :precioproductos)');
        $query->execute($datos);
    }
    public function listar(){
        $lista=[];
        try{
            $sql='select Codigo, Nombre, IMAGEN, Precio from productos';
            $query = $this->db->conectar()->query($sql);
            foreach($query as $row){
                $cargo=[
                    'codigo'=>$row['Codigo'],
                    'nombreproductos'=>$row['Nombre'],
                    'precioproductos'=>$row['Precio'],
                    'imagenproductos'=>$row['IMAGEN'],
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
            $sql='select Codigo, Nombre, Precio from productos where Codigo = ' . $id;
            $query = $this->db->conectar()->query($sql);
            foreach($query as $row){
                $cargo=[
                    'codigo'=>$row['Codigo'],
                    'nombreproducto'=>$row['Nombre'],
                    'precioproducto'=>$row['Precio'],
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