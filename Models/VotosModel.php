<?php 

    class VotosModel extends MySQL{

        public function __construct(){
            parent::__construct();
        }

        public function cerrarSesion(){
            session_start();
            session_destroy();
        }

        public function ver(){
            $query = "SELECT v.id, v.fecha, c.nombre, c.ap_paterno, c.ap_materno, u.id as 'ide' FROM votos v INNER JOIN candidatos c ON v.id_candidato = c.id INNER JOIN usuarios u ON v.id_votante = u.id";
            $request = $this->select_all($query);

            return $request;
        }

        public function contarvotos(){
            $query = "SELECT c.nombre, c.ap_paterno, c.ap_materno, COUNT(v.id_votante) AS 'votos' FROM votos v INNER JOIN candidatos c ON v.id_candidato = c.id GROUP BY id_candidato ORDER BY votos DESC";
            $request = $this->select_all($query);

            return $request;
        }


        
    }

?>