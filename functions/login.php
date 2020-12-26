<?php 
    //Programar el login
    include 'conectionbd.php';
    
    //recibimos los post
    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    $sql = "SELECT * FROM usuarios
            WHERE usr_usuario = '$usuario' AND usr_pass = '$pass'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_assoc($result);
    
    if($data != ""){
        session_start();
        $_SESSION['usuario'] = $data['usr_usuario'];
        header('Location: ../views/dashboard.php');
        echo "bien";
    }else{
        //header('Location: ../views/index.php');
        echo "mal";
    }

    
?>