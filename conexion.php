<?php

    //1
$conexion = mysqli_connect("localhost","root","","pqr");

    //2
    if(!$conexion){
        echo "Error de conexión ".mysqli_connect_error();
        exit();
    }

    ?>