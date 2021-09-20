<?php 

    class PartidosModel extends MySQL{

        public function __construct(){
            parent::__construct();
        }

        public function cerrarSesion(){
            session_start();
            session_destroy();
        }

        public function ver(){
            $query = "SELECT * FROM partidos";
            $request = $this->select_all($query);

            return $request;
        }

        public function agregar($partido, $logo){
            $query = "INSERT INTO partidos(partido,logo) VALUES (?,?)";
            $arrData = array($partido, $logo);
            $request = $this->insert($query,$arrData);

            return $request;
        }

        public function update_registro($partido,$id){
            $query = "UPDATE partidos SET partido = '".$partido."' WHERE id = ".$id;
            $request = $this->update($query);

            return $request;
        }

        public function getDato($id){
            $query = "SELECT * FROM partidos WHERE id = ".$id;
            $request = $this->select($query);

            return $request;
        }

        public function delete_registro($id){
            $query = "DELETE FROM partidos WHERE id = ".$id;
            $request = $this->delete($query);

            return $request; 
        }

        
    }

?>