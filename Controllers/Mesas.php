<?php 

    class mesas extends Controllers{
        
        public function __construct(){
            parent::__construct();
        }

        public function inicio(){
            $data = $this->model->ver();
            $this->views->getView($this,"Admin/mesas",$data);
        }

        public function agregar(){
            $this->views->getView($this,"Admin/mesas_agregar");
        }

        public function add(){
            $mesa = $_POST['mesa'];
            $this->model->agregar($mesa);
            header("Location: http://localhost/Votaciones/mesas/inicio");
        }

        public function editar($id){
            $data = $this->model->getDato($id);
            $this->views->getView($this,"Admin/mesas_editar",$data);
        }

        public function update(){
            $mesa = $_POST['mesa'];
            $id = $_POST['id'];
            $this->model->update_registro($mesa,$id);
            header("Location: http://localhost/Votaciones/mesas/inicio");
        }

        public function eliminar($id){
            $this->model->delete_registro($id);
            header("Location: http://localhost/Votaciones/mesas/inicio");
        }


        
    }

?>