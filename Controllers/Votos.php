<?php 

    class votos extends Controllers{
        
        public function __construct(){
            parent::__construct();
        }

        public function inicio(){
            $data = $this->model->ver();
            $this->views->getView($this,"Admin/votos",$data);
        }

        public function conteo(){
            $data = $this->model->contarVotos();
            $this->views->getView($this,"Admin/conteo",$data);
        }


        
    }

?>