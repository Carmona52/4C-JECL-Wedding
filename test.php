<?php 

static public function ctrRegistro(){
        if (isset($_POST["registroNombre"])){
            if (preg_match("/^[a-zA-Z ]+$/", $_POST["registroNombre"]) &&
                preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})+$/', $_POST["registroEmail"]) &&
                preg_match('/^[0-9a-zA-Z]+$/', $_POST["registroPassword"])){

                $tabla = "registros";

                $token = md5($_POST["registroNombre"] . "+" . $_POST["registroEmail"]);

                $encriptarPassword = crypt($_POST["registroPassword"],'$2a$07$wwwinnovara3dcomwebapp$');

                $datos = array("token" => $token,
                    "nombre" => $_POST["registroNombre"],
                    "email" => $_POST["registroEmail"],
                    "password" => $encriptarPassword
                );

                $respuesta = ModeloFormularios::mdlRegistro($tabla, $datos);
                return $respuesta;
            } else {
                $respuesta = "error";
                return $respuesta;
           }
        }

        }

        ?>