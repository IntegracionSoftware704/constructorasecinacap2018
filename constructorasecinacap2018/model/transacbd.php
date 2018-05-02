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
        public function getUsuarios()
        {
            $consulta=$this->db->query("select * from usuarios;");
            while($filas=$consulta->fetch_assoc())
            {
                $this->usuarios[]=$filas;
            }
            return $this->usuarios;
        }
    }
?>