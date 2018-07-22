<?php
    require_once("../db.php");
    /**
     * @author Danilo Martinez
     * @author Diego Valenzuela
     * @author Aldo Vera
     * 
     * Modelo con las consultas a la base de datos mysql-constructora
     * Proyecto para asignatura Taller integracion de software INACAP Valdivia
     * Carrera: Ingenieria en Informatica
     * Profesor: Mario Alejandro Navarrete Vergara
     * Julio 2018
     * @link http://portales.inacap.cl/
     * 
     * @package model
     */
    class transacciones_modelo
    {
        private $db;
        private $usuarios;
        /**
         * @author Danilo Martinez
         * Constructor, el cual al ser instanciado crea la conexion en la variable $db
         * Crea un objeto de tipo array para la variable $usuarios
         */
        public function __construct()
        {
            $this->db=Conectar::conexion();
            $this->usuarios=array();
        }
        /**
         * @author Danilo Martinez
         * Verifica y devuelve la informacion del usuario de acuerdo a su rol
         * administrador o usuario registrado
         * @param string $rol administrador - usuario
         * @return array $usuarios la informacion del usuario para el login
         */
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
        /**
         * @author Danilo Martinez
         * @author Diego Valenzuela
         * Realiza la consulta de materiales para cargar la pagina gestionmateriales
         * @return array consulta con la informacion
         */
        public function consultarMateriales()
        {
          $dato = array();
             $sql= ("select material.id as id,material.nombre as nombre,material.proveedor as proveedor,material.caracteristica as caracteristica,material.stock as stock,material.tipodecantidad as tipodecantidad,material.preciocompra as preciocompra,material.precioventa as precioventa,material.stockminimo as stockminimo,tipodematerial.nombre as nombrematerial from material join tipodematerial on material.Tipodematerial_id=tipodematerial.id");

            $consulta=$this->db->query($sql);
            while($dat = $consulta->fetch_assoc())
            {
              array_push($dato, $dat);
            }

           return $dato;
        }
        /**
         * @author Danilo Martinez
         * @author Diego Valenzuela
         * Carga la pagina editarmaterial para la edicion de su informacion
         * @param string $resultado la id del material
         * @return array $consulta informacion de la fila de materiales de acuerdo a su id
         */
        public function editarMaterial($resultado)
        {
            $datos = array();
      			 $sql= "select material.id,material.nombre,material.proveedor,material.caracteristica,material.stock,material.tipodecantidad,material.preciocompra,material.precioventa,material.stockminimo,tipodematerial.nombre as nombretipo from material join tipodematerial on material.Tipodematerial_id=tipodematerial.id where material.id=". $resultado ."";
            $consulta=$this->db->query($sql);
            while($dat = $consulta->fetch_assoc())
            {
              array_push($datos,$dat);
            }
             return $datos;
        }
        /**
         * @author Danilo Martinez
         * @author Diego Valenzuela
         * Ingresa en listbox elementos de tipo de material para ingreso y edicion
         * @return array $consulta informacion de tipo de material
         */
  		public function consultarTipoMaterial()
      {
            $datos = array();
    			  $sql= ("select * from tipodematerial");
            $consulta=$this->db->query($sql);
            while($dat = $consulta->fetch_assoc())
            {
              array_push($datos,$dat);
            }
            return $datos;
      }
      /**
       * @author Danilo Martinez
       * @author Diego Valenzuela
       * Inserta materiales a la base de datos
       * @param string $nombre
       * @param string $proveedor
       * @param string $caracteristica
       * @param integer $stock
       * @param string $tipoCant
       * @param integer $preciocompra
       * @param integer $precioventa
       * @param integer $stockMin
       * @param integer $admin la id del responsable del ingreso
       * @param integer $tipoM  id de la tabla tipodematerial
       * @return integer 0 si el ingreso es exitoso, -1 si ha ocurrido una excepcion
       */
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
        /**
         * @author Danilo Martinez
         * @author Diego Valenzuela
         * Edicion de la tabla de materiales, de acuerdo a la pagina edicionmaterial.php
         * @param integer $id
         * @param string $nombre
         * @param string $proveedor
         * @param string $caracteristica
         * @param integer $stock
         * @param string $tipoCant
         * @param integer $preciocompra
         * @param integer $precioventa
         * @param integer $stockMin
         * @param integer $tipodemat id de tabla tipodematerial
         * @return integer 0 si el ingreso es exitoso, -1 si ha ocurrido una excepcion
         */
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
        /**
         * @author Danilo Martinez
         * @author Diego Valenzuela
         * Elimina el registro de materiales de acuerdo a su id
         * @param integer $id de la fila de materiales
         * @return bool true si es exitoso, false si ha ocurrido una excepcion
         */
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
        /**
         * @author Danilo Martinez
         * Agrega usuarios a la tabla cliente
         * @param string $email
         * @param string $nombres
         * @param string $appa
         * @param string $pass
         * @param integer $tel
         * @return integer 0 si el ingreso es exitoso, -1 si hubo un error, -2 si existe un correo
         */
        public function agregarUsuario($email,$nombres,$appa,$pass,$tel)
        {
            $valid = true;
            $sql = "select * from cliente where correoelectronico='". $email ."'";
            $consulta=$this->db->query($sql);
            while($filas=$consulta->fetch_assoc())
            {
                return -2;
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
        /**
         * @author Aldo Vera
         * Inserta una planilla a la tabla planilla
         * @param string $nombre_img
         * @param string $tipo
         * @param integer $tamano
         * @param string $nombre
         * @param integer $costo
         * @return integer 0 si el ingreso es exitoso, -1 si ha ocurrido una excepcion
         */
        public function agregarplanilla($nombre_img,$tipo,$tamano,$nombre,$costo,$estado)
        {
            $sql = "insert into plantilla (foto,nombreplantilla,costototal,estado) values('". $nombre_img ."','". $nombre ."','". $costo ."','". $estado ."')";
            if($this->db->query($sql) === true)
            {
              return 0;
            }
            else
            {
              return -1;
            }
        }
        /**
         * @author Aldo Vera
         * Muestra la informacion de las planillas a la pagina gestionplanilla.php
         * @return array $consulta listado con las planillas de la tabla planilla
         */
        public function consultarPlanilla()
        {
             $sql= ("select plantilla.id as id,plantilla.foto as foto,plantilla.nombreplantilla as nombreplantilla,plantilla.costototal as costototal, plantilla.estado as estado from plantilla");

            $consulta=$this->db->query($sql);

           return $consulta;
        }
        /**
         * @author Danilo Martinez
         * obtiene la informacion ya sea cliente o administrador
         * @param string $correo
         * @param string $rol
         * @return array con la informacion requerida
         */
        public function obtenerDatosEdicion($correo, $rol)
        {
          if($rol == 1) // admin
          {
            $sql = "select nombre,contrasena from administrador where correoelectronico='". $correo ."'";
          } 
          else // usuario
          {
            $sql = "select nombre,apellidopaterno,contrasena,telefono from cliente where correoelectronico='". $correo ."'";
          }
          $consulta=$this->db->query($sql);
          return $consulta;
        }
        /**
         * @author Danilo Martinez
         * Guarda los nuevos valores de informacion, ya sea de clientes o administradores
         * @param string $rol
         * @param string $correo
         * @param integer $nombre
         * @param string $pass
         * @param integer $apellido
         * @param integer $telefono
         * @return integer 0 si el ingreso es exitoso, -1 si ha ocurrido una excepcion
         */
        public function grabaredicionusuario($rol,$correo,$nombre,$pass,$apellido,$telefono)
        {
          $resp = 0;
          if($rol === 1) // admin
          {
            $sql = "update administrador set nombre='". $nombre ."',contrasena='". $pass ."' where correoelectronico='". $correo ."'";
            if($this->db->query($sql) === true)
            {
              $resp = 0;
            }
            else
            {
              $resp = -1;
            }
          } 
          else // usuario
          {
            $sql = "update cliente set nombre='". $nombre ."',apellidopaterno='". $apellido ."',contrasena='". $pass ."',telefono=". $telefono ." where correoelectronico='". $correo ."'";
            if($this->db->query($sql) === true)
            {
              $resp = 0;
            }
            else
            {
              $resp = -1;
            }
          }
          return $resp;
        }
        /**
         * @author Danilo Martinez
         * Inserta un nuevo tipo de material
         * @param string $nombre
         * @return integer 0 si el ingreso es exitoso, -1 si ha ocurrido una excepcion
         */
        public function agregartipoMateriales($nombre)
        {
          $sql = "insert into tipodematerial (nombre) values('". $nombre ."')";
          if($this->db->query($sql) === true)
          {
            return 0;
          }
          else
          {
            return -1;
          }
        }
	    public function verplantilla()
        {
            $sql = ("SELECT * FROM plantilla ");
            $consulta=$this->db->query($sql);

            return $consulta;
        }
    }
?>
