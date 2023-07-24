<?php

class clientesModelo extends Modelo{
    function __construct(){
        parent::__construct();
        
    }
    public function insert($datos){
        $query = $this->db->conectar()->prepare('insert into clientes (RTN, Nombre, Direccion, Telefono, Correo, Imagen, nombreImagen) value(:rtn, :nombre, :direccion, :telefono, :correo, :imagen, :nombreimagen)');
        $query->execute($datos);
    }
    public function listar(){
        
        $lista=[];
        try{
            $sql='select idregistro, RTN, Nombre, Direccion, Telefono, Correo, Imagen, nombreImagen from clientes';
            $query = $this->db->conectar()->query($sql);
            foreach($query as $row){
                $cargo=[
                    'idregistro'=>$row['idregistro'],
                    'rtn'=>$row['RTN'],
                    'nombre'=>$row['Nombre'],
                    'direccion'=>$row['Direccion'],
                    'telefono'=>$row['Telefono'],
                    'correo'=>$row['Correo'],
                    'imagen'=>$row['Imagen'],
                    'nombreimagen'=>$row['nombreImagen'],
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

    public function actualizar($id){
        $lista=[];
        try{
            $sql='update idregistro, RTN, Nombre, Direccion, Telefono, Correo, Imagen, nombreImagen from clientes  where idregistro = ' . $id;
            $query = $this->db->conectar()->query($sql);
            foreach($query as $row){
                $cargo=[
                    'idregistro'=>$row['idregistro'],
                    'rtn'=>$row['RTN'],
                    'nombre'=>$row['Nombre'],
                    'direccion'=>$row['Direccion'],
                    'telefono'=>$row['Telefono'],
                    'correo'=>$row['Correo'],
                    'imagen'=>$row['Imagen'],
                    'nombreimagen'=>$row['nombreImagen'],
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