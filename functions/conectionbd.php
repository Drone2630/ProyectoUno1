<?php
    $conn = mysqli_connect("localhost", "root", "", "prueba");
    $result = mysqli_query($conn, "SELECT * FROM usuarios");
    $data = mysqli_fetch_assoc($result);
?>