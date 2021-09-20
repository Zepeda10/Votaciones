<?php 

    class MesasModel extends MySQL{

        public function __construct(){
            parent::__construct();
        }

        public function cerrarSesion(){
            session_start();
            session_destroy();
        }

        public function ver(){
            $query = "SELECT * FROM mesas";
            $request = $this->select_all($query);

            return $request;
        }

        public function agregar($mesa){
            $query = "INSERT INTO mesas(mesa) VALUES (?)";
            $arrData = array($mesa);
            $request = $this->insert($query,$arrData);

            return $request;
        }

        public function update_registro($mesa, $id){
            $query = "UPDATE mesas SET mesa = '".$mesa."' WHERE id = ".$id;
            $request = $this->update($query);

            return $request;
        }

        public function getDato($id){
            $query = "SELECT * FROM mesas WHERE id = ".$id;
            $request = $this->select($query);

            return $request;
        }

        public function delete_registro($id){
            $query = "DELETE FROM mesas WHERE id = ".$id;
            $request = $this->delete($query);

            return $request; 
        }

    
        
    }

?>