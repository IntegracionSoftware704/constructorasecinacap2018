<?php
class Conectar{
    public static function conexion()
    {
        $conexion=new mysqli("localhost", "root", "","mysql-contructora");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
