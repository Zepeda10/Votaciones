<?php 

    class usuarios extends Controllers{
        
        public function __construct(){
            parent::__construct();
        }

        public function inicio(){
            $data = $this->model->ver();
            $this->views->getView($this,"Admin/usuarios",$data);
        }

        public function agregar(){
            $data['mesas'] = $this->model->getMesas();
            $data['roles'] = $this->model->getRoles();
            $this->views->getView($this,"Admin/usuarios_agregar",$data);
        }

        public function add(){
            $nombre = $_POST['nombre'];
            $dni = $_POST['dni'];
            $ap1 = $_POST['ap_paterno'];
            $ap2 = $_POST['ap_materno'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $mesa = $_POST['id_mesa'];
            $rol = $_POST['id_rol'];
            $pass = $_POST['pass'];

            $this->model->agregar($dni, $nombre, $ap1, $ap2, $email, $telefono, $pass, $mesa, $rol);
            header("Location: http://localhost/Votaciones/usuarios/inicio");
        }

        public function editar($id){
            $data['datos'] = $this->model->getDato($id);
            $data['mesas'] = $this->model->getMesas();
            $data['roles'] = $this->model->getRoles();
            $this->views->getView($this,"Admin/usuarios_editar",$data);
        }

        public function update(){
            $nombre = $_POST['nombre'];
            $dni = $_POST['dni'];
            $ap1 = $_POST['ap_paterno'];
            $ap2 = $_POST['ap_materno'];
            $telefono = $_POST['telefono'];
            $email = $_POST['email'];
            $mesa = $_POST['id_mesa'];
            $rol = $_POST['id_rol'];
            $pass = $_POST['pass'];
            $id = $_POST['id'];
            $this->model->update_registro($dni, $nombre, $ap1, $ap2, $email, $telefono, $pass, $mesa, $rol, $id);
            header("Location: http://localhost/Votaciones/usuarios/inicio");
        }

        public function eliminar($id){
            $this->model->delete_registro($id);
            header("Location: http://localhost/Votaciones/usuarios/inicio");
        }


        
    }

?>