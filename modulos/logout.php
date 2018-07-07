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
 * @author Danilo Martinez
 * Destruye las variables globales y retorna al index.php
 */
    session_start();
    session_destroy();
    header("Location: ../index.php");
?>