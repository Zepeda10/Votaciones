<?php 

    class Views{

        function getView($controller, $view,$data=""){
            $controller = get_class($controller);

            if($controller == "login"){
                $view = VIEWS.$view.".php";

            }else if($controller == "roles"){
                $view = VIEWS.$view.".php";

            }else if($controller == "usuarios"){
                $view = VIEWS.$view.".php";

            }else if($controller == "mesas"){
                $view = VIEWS.$view.".php";

            }else if($controller == "partidos"){
                $view = VIEWS.$view.".php";

            }else if($controller == "candidatos"){
                $view = VIEWS.$view.".php";

            }else if($controller == "votos"){
                $view = VIEWS.$view.".php";

            }else{
                $view = VIEWS.$controller."/".$view.".php";
            }

           

            require_once($view);
        }
    }



?>