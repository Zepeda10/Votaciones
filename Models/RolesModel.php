<?php 

    class RolesModel extends MySQL{

        public function __construct(){
            parent::__construct();
        }

        public function cerrarSesion(){
            session_start();
            session_destroy();
        }

        public function ver(){
            $query = "SELECT * FROM roles";
            $request = $this->select_all($query);

            return $request;
        }

        


        
    }

?>