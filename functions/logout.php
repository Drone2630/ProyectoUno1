<?php 
    //Programar el cierre de sesion
    session_start();
    session_destroy();
    header('Location: ../views/index.php');
?>