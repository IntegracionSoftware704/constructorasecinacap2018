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
        public function consultarMateriales()
        {
             $sql= ("select material.id as id,material.nombre as nombre,material.proveedor as proveedor,material.caracteristica as caracteristica,material.stock as stock,material.tipodecantidad as tipodecantidad,material.preciocompra as preciocompra,material.precioventa as precioventa,material.stockminimo as stockminimo,tipodematerial.nombre as nombrematerial from material join tipodematerial on material.Tipodematerial_id=tipodematerial.id");

            $consulta=$this->db->query($sql);

           return $consulta;
        }
        public function editarMaterial($resultado)
        {
      			 $sql= "select * from material WHERE id=".$resultado."";
      			$consulta=$this->db->query($sql);
      			//$filas=$consulta->fetch_assoc();
             return $consulta;
		    }
  		public function consultarTipoMaterial()
      {
    			  $sql= ("select * from tipodematerial");
    			  $consulta=$this->db->query($sql);
            return $consulta;
  		}
        public function agregarMateriales($nombre,$proveedor,$caracteristica,$stock,$tipoCant,$preciocompra,$precioventa,$stockMin,$admin,$tipoM)
        {
            $sql = "insert into material (
nombre,proveedor,caracteristica,stock,tipodecantidad,preciocompra,precioventa,stockminimo,Administrador_id,Tipodematerial_id) values('". $nombre ."','". $proveedor ."','". $caracteristica ."',". $stock .",'". $tipoCant ."',". $preciocompra .",". $precioventa .",". $stockMin .",". $admin .",". $tipoM .")";
            if($this->db->query($sql) === true)
            {
              return 0;
            }
            else
            {
              return -1;
            }
        }
        public function actualizarMateriales($id,$nombre,$proveedor,$caracteristica,$stock,$tipoCant,$preciocompra,$precioventa,$stockMin,$tipodemat)
        {

            $sql = "UPDATE material SET nombre='$nombre',proveedor='$proveedor',caracteristica='$caracteristica',stock='$stock',tipodecantidad='$tipoCant',preciocompra= '$preciocompra',precioventa='$precioventa',stockminimo='$stockMin',Tipodematerial_id='$tipodemat' WHERE id='$id'";
            if($this->db->query($sql) === true)
            {
              return 0;
            }
            else
            {
              return -1;
            }
        }
        //te puede servir!!!!!
				public function eliminarMateriales($id)
        {
            $sql = "delete from material where id=". $id ."";
            if($this->db->query($sql) === true)
            {
              return true;
            }
            else
            {
              return false;
            }
        }
        public function agregarUsuario($email,$nombres,$appa,$pass,$tel)
        {
            $valid = true;
            $sql = "select * from cliente where correoelectronico='". $email ."'";
            $consulta=$this->db->query($sql);
            while($filas=$consulta->fetch_assoc())
            {
                return -2; // existe correo
            }
            $sql = "insert into cliente (nombre,apellidopaterno,correoelectronico,contrasena,telefono) values('". $nombres ."','". $appa ."','". $email ."','". $pass ."',". $tel .")";
            if($this->db->query($sql) === true)
            {
              return 0;
            }
            else
            {
              return -1;
            }
        }
        public function agregarplanilla($id,$nombre_img,$tipo,$tamano,$nombre,$costo)
        {
            $valid = true;
            $sql = "select id from plantilla";
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
            $sql = "insert into plantilla (id,foto,nombreplantilla,costototal) values(". ($mayor + 1) .",'". $nombre_img ."','". $nombre ."','". $costo ."')";
            if($this->db->query($sql) === true)
            {
              return 0;
            }
            else
            {
              return -1;
            }
        }
        public function consultarPlanilla()
        {
             $sql= ("select plantilla.id as id,plantilla.foto as foto,plantilla.nombreplantilla as nombreplantilla,plantilla.costototal as costototal from plantilla");

            $consulta=$this->db->query($sql);

           return $consulta;
        }
    }
?>
