<?php 

    class LoginModel extends MySQL{

        public function __construct(){
            parent::__construct();
        }


        public function confirmaLogin ($mesa, $pass){
            $query = "SELECT * FROM usuarios WHERE id_mesa = ".$mesa." AND pass= '".$pass."' ";
            $request = $this->select($query);

            return $request;
        }
        
        public function confirmaLoginAdmin($dni,$pass){
            $query = "SELECT * FROM usuarios WHERE dni = '".$dni."' AND pass= '".$pass."' ";
            $request = $this->select($query);

            return $request;
        }

        public function confirmaLoginDni($dni,$mesa){
            $query = "SELECT * FROM usuarios WHERE dni = '".$dni."' AND id_mesa= ".$mesa." ";
            $request = $this->select($query);

            return $request;
        }


        public function cerrarSesion(){
            session_start();
            session_destroy();
        }

        
        public function getCandidatos(){
            $query = "SELECT c.id, c.nombre, c.ap_paterno, c.ap_materno, c.foto, p.partido FROM candidatos c INNER JOIN partidos p ON c.id_partido = p.id";
            $request = $this->select_all($query);

            return $request;
        }

        public function votacion($idCandidato,$fecha,$idVotante){
            $query = "INSERT INTO votos(id_candidato,fecha,id_votante) VALUES (?,?,?)";
            $arrData = array($idCandidato,$fecha,$idVotante);
            $request = $this->insert($query,$arrData);

            return $request;
        }

        public function getIdVotante($id){
            $query = "SELECT * FROM votos WHERE id_votante = ".$id;
            $request = $this->select($query);

            return $request;
        }
        


        
    }

?>