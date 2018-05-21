<?php
    require_once("../db.php");
    class transacciones_modelo
    {
        private $db;
        private $usuarios;

        public function __construct()
        {
            $this->db=Conectar::conexion();
            $this->usuarios=array();
        }
        public function getUsuarios($rol)
        {
            $sql = "select * from ". $rol;
            $consulta=$this->db->query($sql);
            while($filas=$consulta->fetch_assoc())
            {
                $this->usuarios[]=$filas;
            }
            return $this->usuarios;
        }
    }
?>
