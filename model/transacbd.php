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
        public function agregarUsuario($email,$nombres,$appa,$pass,$tel)
        {
            $valid = true;
            $sql = "select id from cliente";
            $consulta=$this->db->query($sql);
            while($filas=$consulta->fetch_assoc())
            {
                if($valid)
                {
                  $mayor = $filas["id"];
                  $valid = false;
                }
                else
                {
                  if($mayor < $filas["id"])
                  {
                    $mayor = $filas["id"];
                  }
                }
            }
            $sql = "insert into cliente values(". ($mayor + 1) .",'". $nombres ."','". $appa ."','". $email ."','". $pass ."',". $tel .")";
            if($this->db->query($sql) === true)
            {
              return 0;
            }
            else
            {
              return -1;
            }

        }
    }
?>
