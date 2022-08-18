<?php
/**
 * Created by PhpStorm.
 * User: Usuario
 * Date: 16/01/2018
 * Time: 09:59 PM
 */

class Conexion{
    public static function conectar(){
        try {
           //  $link = new PDO("mysql:host=207.210.229.69;dbname=coesicyd_simposio","coesicyd_siteuse","coesicydusuario",
           $link = new PDO("mysql:host=localhost;dbname=coesicyd_simposio","root","",
                array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
        //mysqli_connect("207.210.229.69:2082","coesicyd_siteu","BdCo3C1syDeT","coesicyd_site");
        //    array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        return $link;
    }
}
