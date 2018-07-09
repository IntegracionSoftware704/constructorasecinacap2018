<?php
class Conectar{
    /**
    * @author Danilo Martinez
    * Crea la conexion a la base de datos con las demas paginas php
    * @return conexion a la base de datos
    *
     */
    public static function conexion()
    {
        $conexion=new mysqli("localhost", "root", "","mysql-contructora");
        $conexion->query("SET NAMES 'utf8'");
        return $conexion;
    }
}
?>
