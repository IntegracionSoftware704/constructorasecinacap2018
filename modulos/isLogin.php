<?php
    session_start();
    $estado = false;
    if(isset($_SESSION['email']))
    {
        $estado = true;
    }
?>
