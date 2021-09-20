<?php 

    class roles extends Controllers{
        
        public function __construct(){
            parent::__construct();
        }

        public function inicio(){
            $data = $this->model->ver();
            $this->views->getView($this,"Admin/roles",$data);
        }


        
    }

?>