<?php
    session_start();

    if(!isset($_SESSION['usuario'])){
        header('Location: index.php');
    }else{
        $usuario = $_SESSION['usuario'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>bienvenido señor <?=$usuario?></h1>
    <a href="../functions/logout.php">Cerrar sesion</a>
</body>
</html>