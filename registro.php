<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="stylere.css" rel="stylesheet" />
    
</head>
<body>
    <form action="guardar_post.php"  method="post">
    <h1> Registro </h1>

        <div class="input-wrapper">
            <input type="text" name="id" placeholder="Identificacion">    
        </div>

        <div class="input-wrapper">
            <input type="text" name="nombre" placeholder="Nombre">    
        </div>

        <div class="input-wrapper">
            <input type="email" name="correo" placeholder="Correo">    
        </div>

        <div class="input-wrapper">
            <input type="password" name="contrasena" placeholder="Contraseña">    
        </div>

        <div class="input-wrapper">
            <input type="text" name="direccion" placeholder="Dirección">    
        </div>

        <div class="input-wrapper">
            <input type="tel" name="telefono" placeholder="Teléfono">    
        </div>

        <input class="btn" type="submit" name="register" value="Registrarse">
    

    </form>
</body>
</html>