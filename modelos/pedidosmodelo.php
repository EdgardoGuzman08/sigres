<?php
class pedidosModelo extends Modelo{
    function __construct(){
        parent::__construct();
        
    }
    public function setEliminar($id) {

        if(isset($_GET['id'])) {
            $id= $_GET['id'];
            echo "id";
            $sql = "DELETE FROM app_pedidos WHERE id = $id";
            $query = $this->db->conectar()->query($sql);
            if(!$query) {
              die("Query Failed.");
            }
          
            $_SESSION['message'] = 'El campo se elimino con exito!';
            $_SESSION['message_type'] = 'danger';
            header('Location: /pedidos/inicio');
          }
    }

    public function listar(){
        $lista=[];
        try{
            $sql='select id , usuario_clientes_id , fechahora, dispositivo , activo , modalidad, estado, usuarios_idregistro , fechamodificacion , usuariomodificacion , estacionmodificacion from app_pedidos';
            $query = $this->db->conectar()->query($sql);
            foreach($query as $row){
                $cargo=[
                    'id'=>$row['id'],
                    'UsuarioClienteId'=>$row['usuario_clientes_id'],
                    'Fecha_Hora'=>$row['fechahora'],
                    'NombreDispositivo'=>$row['dispositivo'],
                    'EstadoActivo'=>$row['activo'],
                    'EstadoModalidad'=>$row['modalidad'],
                    'TipoEstado'=>$row['estado'],
                    'UsuarioIdRegistro'=>$row['usuarios_idregistro'],
                    'FechaModificado'=>$row['fechamodificacion'],
                    'UsuarioModificar'=>$row['usuariomodificacion'],
                    'EstacionModificar'=>$row['estacionmodificacion'],
                ];
                
;                array_push($lista, $cargo);            
            }
            return $lista;    
        }catch(\Throwable $th){
            //throw $th;
        }
    }

    public function buscarID($id){
        $lista=[];
        try{
            $sql='select id , usuario_clientes_id , fechahora, dispositivo , activo , modalidad, estado, usuarios_idregistro , fechamodificacion , usuariomodificacion , estacionmodificacion from app_pedidos where id = ' . $id;
            $query = $this->db->conectar()->query($sql);
            foreach($query as $row){
                $cargo=[                    
                    'id'=>$row['id'],
                    'UsuarioClienteId'=>$row['usuario_clientes_id'],
                    'Fecha_Hora'=>$row['fechahora'],
                    'NombreDispositivo'=>$row['dispositivo'],
                    'EstadoActivo'=>$row['activo'],
                    'EstadoModalidad'=>$row['modalidad'],
                    'TipoEstado'=>$row['estado'],
                    'UsuarioIdRegistro'=>$row['usuarios_idregistro'],
                    'FechaModificado'=>$row['fechamodificacion'],
                    'UsuarioModificar'=>$row['usuariomodificacion'],
                    'EstacionModificar'=>$row['estacionmodificacion'],
                ];
                array_push($lista, $cargo);            
            }
            return $lista;    
        }catch(\Throwable $th){
            //throw $th;
        }
    }

}


