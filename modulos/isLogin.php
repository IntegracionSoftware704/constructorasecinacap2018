<?php
/**
 * @author Danilo Martinez
 * @author Diego Valenzuela
 * @author Aldo Vera
 * 
 * Modulos encargados de la sesion del usuario
 * Proyecto para asignatura Taller integracion de software INACAP Valdivia
 * Carrera: Ingenieria en Informatica
 * Profesor: Mario Alejandro Navarrete Vergara
 * Julio 2018
 * @link http://portales.inacap.cl/
 * 
 * @package model
 *
 * Mantiene la sesion abierta y ademas identifica al usuario en una variable global
 * variable estado ordena la restriccion de elementos del sitio si esta o no registrado
 * @global email
 */
    session_start();
    $estado = false;
    if(isset($_SESSION['email']))
    {
        $estado = true;
    }
?>
