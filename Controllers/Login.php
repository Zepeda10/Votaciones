<?php 


    class login extends Controllers{
        
        public function __construct(){
            parent::__construct();
        }

        public function inicio(){
            $this->views->getView($this,"login");
        }

        public function loguearse(){
            $mesa = $_POST['id_mesa'];
            $pass = $_POST['pass'];

            $result = $this->model->confirmaLogin($mesa,$pass);

            if($result){
                session_start();
                $_SESSION['id_usuario'] = $result['id'];
                $_SESSION['usuario'] = $result['nombre'];
                $_SESSION['mesa'] = $result['id_mesa'];

                header("Location: http://localhost/Votaciones/login/dni");

            
            }else{
                $this->views->getView($this,"Errors/NoLogin");
            }
        }

        public function loguearseAdmin(){
            $dni = $_POST['dni'];
            $pass = $_POST['pass'];

            $result = $this->model->confirmaLoginAdmin($dni,$pass);

            if($result){
                session_start();
                $_SESSION['id_usuario'] = $result['id'];
                $_SESSION['usuario'] = $result['nombre'];

                header("Location: http://localhost/Votaciones/login/panel");

            
            }else{
                $this->views->getView($this,"Errors/NoLogin");
            }
        }

        public function loguearseDni(){
            session_start();
            $dni = $_POST['dni'];
            $mesa = $_SESSION['mesa'];

            $result = $this->model->confirmaLoginDni($dni,$mesa);

            if($result){
                $data = $this->model->getCandidatos();
                $this->views->getView($this,"home",$data);

            
            }else{
                $this->views->getView($this,"Errors/ErrorDni");
            }
        }

        public function admin(){
            $this->views->getView($this,"login_admin");
        }

        public function dni(){
            $this->views->getView($this,"dni");
        }

        public function panel(){
            $this->views->getView($this,"Admin/panel");
        }

        public function home(){
            session_start();
            $data = $this->model->getCandidatos();
            $this->views->getView($this,"home",$data);
        }

        public function cerrar(){
            $this->model->cerrarSesion();
            header("Location: ../");
        }

        public function votar($id){
            session_start();
            $votante =  $_SESSION['id_usuario'];
            $result = $this->model->getIdVotante($votante);

            if($result){
                echo "<script>
                alert('Usted ya ha votado');
                window.location.href = '../../login/home';
            </script>";

            }else{
                
                
                $fecha = date("F j, Y, g:i a"); 
                $this->model->votacion($id,$fecha,$votante);
                header("Location: http://localhost/Votaciones/login/home");
            }

            
        }

        
        
    }

?>