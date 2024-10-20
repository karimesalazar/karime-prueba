
<?php
   
   error_reporting(E_ALL);
   ini_set('display_errors',1);

   include_once('conexion.php');

    //3
    $pwd = password_hash($_POST['contrasena'], PASSWORD_DEFAULT);

    //4
    $sql = "insert into usuarios(id, nombre, correo, contrasena, direccion, telefono) values 
    ('".$_POST['id']."', '".$_POST['nombre']."','".$_POST['correo']."', '".$pwd."','".$_POST['direccion']."','".$_POST['telefono']."')";

    //5
    $resultado = mysqli_query($conexion,$sql);

    if($resultado){
        //enviar un mensaje
        //redereccionar según el diagrama de actividades
        //Manejo de sesión
        echo "Se ha registrado correctamente";
        header("location: index.php");
     }else{
        //enviar mensaje
        //redereccionar según el diagrama de actividades
        //Manejo de sesión
        echo "Error de registro";
     }
?>



