<?php 

    class CandidatosModel extends MySQL{

        public function __construct(){
            parent::__construct();
        }

        public function cerrarSesion(){
            session_start();
            session_destroy();
        }

        public function ver(){
            $query = "SELECT * FROM candidatos";
            $request = $this->select_all($query);

            return $request;
        }

        public function agregar($nombre, $ap1, $ap2, $foto, $partido){
            $query = "INSERT INTO candidatos(nombre,ap_paterno,ap_materno,foto,id_partido) VALUES (?,?,?,?,?)";
            $arrData = array($nombre,$ap1,$ap2,$foto,$partido);
            $request = $this->insert($query,$arrData);

            return $request;
        }

        public function update_registro($nombre, $ap1, $ap2, $partido, $id){
            $query = "UPDATE candidatos SET nombre = '".$nombre."', ap_paterno = '".$ap1."', ap_materno = '".$ap2."', id_partido = ".$partido." WHERE id = ".$id;
            $request = $this->update($query);

            return $request;
        }

        public function getDato($id){
            $query = "SELECT * FROM candidatos WHERE id = ".$id;
            $request = $this->select($query);

            return $request;
        }

        public function delete_registro($id){
            $query = "DELETE FROM candidatos WHERE id = ".$id;
            $request = $this->delete($query);

            return $request; 
        }

        public function getPartidos(){
            $query = "SELECT * FROM partidos";
            $request = $this->select_all($query);

            return $request;
        }

        
    }

?>