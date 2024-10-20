
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="stylelogin.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <div class="wrapper">
        <form method="POST" action="verificar_login.php"> 
            <h1>Login</h1>

            <div class="input-box">
                <input type="text" name="correo" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="contrasena" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <button type="submit"class="btn" >Iniciar sesión</button>
        
            <div class="register-link">
                <p>Don't have an account? <a href="registro.php">Register</a></p> 
            </div>

        </form>
    </div>
    
</body>
</html>