<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 16/01/2018
 * Time: 09:59 PM
 */

require_once "conexion.php";

class Datos extends Conexion{

    #vista Slider
    public static function ponentesEs($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT idbiografia,nombre,biografia,image FROM  $tabla ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    #vista Slider
    public static function ponentesEn($tabla){
        $stmt = Conexion::conectar()->prepare("SELECT idbiography,biography.name,biography,image FROM  $tabla ");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }

    public static function agregarPagoPaypalModel($datosModels, $tabla){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,correo,institucion,pais,pago,estatus) 
        VALUES (:nombre,:correo,:institucion,:pais,:pago,:estatus)");
        #bindParam vincula
        $stmt->bindParam(":nombre", $datosModels["paypalnombre"],PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datosModels["paypalcorreo"],PDO::PARAM_STR);
        $stmt->bindParam(":institucion", $datosModels["paypalinstitucion"],PDO::PARAM_STR);
        $stmt->bindParam(":pais", $datosModels["paypalpais"],PDO::PARAM_STR);
        $stmt->bindParam(":pago", $datosModels["paypalpago"],PDO::PARAM_STR);
        $stmt->bindParam(":estatus", $datosModels["paypalestatus"],PDO::PARAM_STR);

        if($stmt->execute()){
            return "success";
        }
        else{
            return "error";
        }
        $stmt->close();
    }
    public static function agregarPagoTransferenciaModel($datosModels, $tabla){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,correo,institucion,pais,pago,estatus) 
        VALUES (:nombre,:correo,:institucion,:pais,:pago,:estatus)");
        #bindParam vincula
        $stmt->bindParam(":nombre", $datosModels["transferencianombre"],PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datosModels["transferenciacorreo"],PDO::PARAM_STR);
        $stmt->bindParam(":institucion", $datosModels["transferenciainstitucion"],PDO::PARAM_STR);
        $stmt->bindParam(":pais", $datosModels["transferenciapais"],PDO::PARAM_STR);
        $stmt->bindParam(":pago", $datosModels["transferenciapago"],PDO::PARAM_STR);
        $stmt->bindParam(":estatus", $datosModels["transferenciaestatus"],PDO::PARAM_STR);

        if($stmt->execute()){
            return "success";
        }
        else{
            return "error";
        }
        $stmt->close();
    }
    public static function agregarPagoEfectivoModel($datosModels, $tabla){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,correo,institucion,pais,ciudad,pago,estatus) 
        VALUES (:nombre,:correo,:institucion,:pais,:ciudad,:pago,:estatus)");
        #bindParam vincula
        $stmt->bindParam(":nombre", $datosModels["efectivonombre"],PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datosModels["efectivocorreo"],PDO::PARAM_STR);
        $stmt->bindParam(":institucion", $datosModels["efectivoinstitucion"],PDO::PARAM_STR);
        $stmt->bindParam(":pais", $datosModels["efectivopais"],PDO::PARAM_STR);
        $stmt->bindParam(":ciudad", $datosModels["efectivociudad"],PDO::PARAM_STR);
        $stmt->bindParam(":pago", $datosModels["efectivopago"],PDO::PARAM_STR);
        $stmt->bindParam(":estatus", $datosModels["efectivoestatus"],PDO::PARAM_STR);

        if($stmt->execute()){
            return "success";
        }
        else{
            return "error";
        }
        $stmt->close();
    }
    public static function agregarRegistroModel($datosModels, $tabla){
        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre,edad,telefono,correo,ciudad,municipio,institucion,estudio,etzna) 
        VALUES (:nombre,:edad,:telefono,:correo,:ciudad,:municipio,:institucion,:estudio,:etzna)");
        #bindParam vincula
        $stmt->bindParam(":nombre", $datosModels["nombre"],PDO::PARAM_STR);
        $stmt->bindParam(":edad", $datosModels["edad"],PDO::PARAM_STR);
        $stmt->bindParam(":telefono", $datosModels["telefono"],PDO::PARAM_STR);
        $stmt->bindParam(":correo", $datosModels["correo"],PDO::PARAM_STR);
        $stmt->bindParam(":ciudad", $datosModels["ciudad"],PDO::PARAM_STR);
        $stmt->bindParam(":municipio", $datosModels["municipio"],PDO::PARAM_STR);
        $stmt->bindParam(":institucion", $datosModels["institucion"],PDO::PARAM_STR);
        $stmt->bindParam(":estudio", $datosModels["estudio"],PDO::PARAM_STR);
        $stmt->bindParam(":etzna", $datosModels["etzna"],PDO::PARAM_STR);

        if($stmt->execute()){
            return "success";
        }
        else{
            return "error";
        }
        $stmt->close();
    }
    public static function getPagoPaypalModel(){
        $stmt = Conexion::conectar()->prepare("SELECT id_inscripcion,nombre,correo,institucion,pais,estatus FROM inscripcion WHERE pago ='paypal'");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    public static function getPagoTransferenciaModel(){
        $stmt = Conexion::conectar()->prepare("SELECT id_inscripcion,nombre,correo,institucion,pais,estatus FROM inscripcion WHERE pago ='transferencia'");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    public static function getPagoEfectivoModel(){
        $stmt = Conexion::conectar()->prepare("SELECT id_inscripcion,nombre,correo,institucion,pais,estatus FROM inscripcion WHERE pago ='efectivo'");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
    public static function getPagoCampecheModel(){
        $stmt = Conexion::conectar()->prepare("SELECT nombre,correo,ciudad,municipio,institucion,estudio,etzna FROM registro");
        $stmt->execute();
        return $stmt->fetchAll();
        $stmt->close();
    }
}