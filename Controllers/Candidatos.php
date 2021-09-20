<?php 

    class candidatos extends Controllers{
        
        public function __construct(){
            parent::__construct();
        }

        public function inicio(){
            $data = $this->model->ver();
            $this->views->getView($this,"Admin/candidatos",$data);
        }

        public function agregar(){
            $data = $this->model->getPartidos();
            $this->views->getView($this,"Admin/candidatos_agregar",$data);
        }

        public function add(){
            if(isset($_FILES['foto']['name'])){

                $destinoRuta = "imagenes_subidas/";
                                                                                //el nombre de la img en la DB
                move_uploaded_file($_FILES['foto']['tmp_name'], $destinoRuta.$_FILES['foto']['name']);//mover archivo del directorio temporal a la carpeta imagenes

            }else{
                echo "El archivo no se ha podido copiar al directorio de imagen <br>";
            }

            $nombre = $_POST['nombre'];
            $ap1 = $_POST['ap_paterno'];
            $ap2 = $_POST['ap_materno'];
            $partido = $_POST['id_partido'];
            $foto = $_FILES['foto']['name'];

            $this->model->agregar($nombre,$ap1,$ap2,$foto,$partido);
            header("Location: http://localhost/Votaciones/candidatos/inicio");
        }

        public function editar($id){
            $data['datos'] = $this->model->getDato($id);
            $data['partidos'] = $this->model->getPartidos($id);
            $this->views->getView($this,"Admin/candidatos_editar",$data);
        }

        public function update(){
            $nombre = $_POST['nombre'];
            $ap1 = $_POST['ap_paterno'];
            $ap2 = $_POST['ap_materno'];
            $partido = $_POST['id_partido'];
            $id = $_POST['id'];
            $this->model->update_registro($nombre,$ap1,$ap2,$partido,$id);
            header("Location: http://localhost/Votaciones/candidatos/inicio");
        }

        public function eliminar($id){
            $this->model->delete_registro($id);
            header("Location: http://localhost/Votaciones/candidatos/inicio");
        }


        
    }

?>