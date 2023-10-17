<?php
require_once "conexion.php";

class ModeloFormularios{

    static public function mdlRegistro($tabla, $datos){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(token, nombre, email, password) values 
        (:token, :nombre, :email, :password)");
        $stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
        $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);

        if ($stmt->execute()){
            return "ok";
        }else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt = null;
    }

    static public function mdlSeleccionarRegistros($tabla, $item, $valor){

        if ($item == null && $valor == null){
            $stmt = Conexion::conectar()->prepare("select*, DATE_FORMAT(fecha, '%d/%m/%Y' ) as f from $tabla order by id desc");
            $stmt -> execute();
            return $stmt->fetchAll();
            
        }else{
            $stmt = Conexion::conectar()->prepare("select*, DATE_FORMAT(fecha, '%d/%m/%Y' ) as f from $tabla 
            where $item = :$item order by id desc");
            $stmt -> bindParam(":".$item,$valor, PDO::PARAM_STR);
            $stmt -> execute();
            return $stmt -> fetch();
        }
        $stmt = null;
    }
    static public function mdlActualizarRegistro($tabla, $datos){
        if ($datos["nuevoToken"] == null){
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email, password=:password WHERE token=:token");
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
            $stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
        } else {
            $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre=:nombre, email=:email, password=:password, token=:nuevoToken WHERE token=:token");
            $stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
            $stmt->bindParam(":email", $datos["email"], PDO::PARAM_STR);
            $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
            $stmt->bindParam(":token", $datos["token"], PDO::PARAM_STR);
            $stmt->bindParam(":nuevoToken", $datos["nuevoToken"], PDO::PARAM_STR);
        }
        

        if ($stmt->execute()){
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        //$stmt->close();
        $stmt = null;
    }

    static public function mdlEliminarRegistro($tabla, $valor){
        $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE token =:token");
    
        $stmt->bindParam(":token", $valor, PDO::PARAM_INT);
    
        if ($stmt->execute()) {
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
    
        $stmt = null;
    }

    static public function mdlActualizarIntentosFallidos($tabla, $valor, $token){
        $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET intentos_fallidos = :intentos_fallidos 
        WHERE token = :token");
    
        $stmt->bindParam(":intentos_fallidos", $valor, PDO::PARAM_INT);
        $stmt->bindParam(":token", $token, PDO::PARAM_STR);
    
        if ($stmt->execute()){
            return "ok";
        } else {
            print_r(Conexion::conectar()->errorInfo());
        }
        $stmt = null;
        
    }

}
