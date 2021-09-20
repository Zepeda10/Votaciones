<?php 

    class partidos extends Controllers{
        
        public function __construct(){
            parent::__construct();
        }

        public function inicio(){
            $data = $this->model->ver();
            $this->views->getView($this,"Admin/partidos",$data);
        }

        public function agregar(){
            $this->views->getView($this,"Admin/partidos_agregar");
        }

        public function add(){
            if(isset($_FILES['logo']['name'])){

                $destinoRuta = "imagenes_subidas/";
                                                                                //el nombre de la img en la DB
                move_uploaded_file($_FILES['logo']['tmp_name'], $destinoRuta.$_FILES['logo']['name']);//mover archivo del directorio temporal a la carpeta imagenes

            }else{
                echo "El archivo no se ha podido copiar al directorio de imagen <br>";
            }

            $partido = $_POST['partido'];
            $logo = $_FILES['logo']['name'];

            $this->model->agregar($partido, $logo);
            header("Location: http://localhost/Votaciones/partidos/inicio");
        }

        public function editar($id){
            $data = $this->model->getDato($id);
            $this->views->getView($this,"Admin/partidos_editar",$data);
        }

        public function update(){
            $partido = $_POST['partido'];
            $id = $_POST['id'];
            $this->model->update_registro($partido, $id);
            header("Location: http://localhost/Votaciones/partidos/inicio");
        }

        public function eliminar($id){
            $this->model->delete_registro($id);
            header("Location: http://localhost/Votaciones/partidos/inicio");
        }


        
    }

?>