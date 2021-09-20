<?php 

    class UsuariosModel extends MySQL{

        public function __construct(){
            parent::__construct();
        }

        public function cerrarSesion(){
            session_start();
            session_destroy();
        }

        public function ver(){
            $query = "SELECT * FROM usuarios";
            $request = $this->select_all($query);

            return $request;
        }

        public function agregar($dni, $nombre, $ap1, $ap2, $email, $telefono, $pass, $mesa, $rol){
            $query = "INSERT INTO usuarios(dni,nombre,ap_paterno,ap_materno,email,telefono,pass,id_mesa,id_rol) VALUES (?,?,?,?,?,?,?,?,?)";
            $arrData = array($dni,$nombre,$ap1,$ap2,$email,$telefono,$pass,$mesa,$rol);
            $request = $this->insert($query,$arrData);

            return $request;
        }

        public function update_registro($dni, $nombre, $ap1, $ap2, $email, $telefono, $pass, $mesa, $rol, $id){
            $query = "UPDATE usuarios SET dni = '".$dni."', nombre = '".$nombre."', ap_paterno = '".$ap1."', ap_materno = '".$ap2."', email = '".$email."', telefono = '".$telefono."', pass = '".$pass."', id_mesa = ".$mesa.", id_rol = ".$rol." WHERE id = ".$id;
            $request = $this->update($query);

            return $request;
        }

        public function getDato($id){
            $query = "SELECT * FROM usuarios WHERE id = ".$id;
            $request = $this->select($query);

            return $request;
        }

        public function delete_registro($id){
            $query = "DELETE FROM usuarios WHERE id = ".$id;
            $request = $this->delete($query);

            return $request; 
        }

        public function getMesas(){
            $query = "SELECT * FROM mesas";
            $request = $this->select_all($query);

            return $request;
        }

        public function getRoles(){
            $query = "SELECT * FROM roles ORDER BY id DESC";
            $request = $this->select_all($query);

            return $request;
        }

        


        
    }

?>