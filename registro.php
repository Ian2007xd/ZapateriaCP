<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Registro.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>REGISTRO</title>
</head>
<body>

    <script src="https://kit.fontawesome.com/81581fb069.js"
    crossorigin="anonymous"></script>

    <div class="fondo">
        <div class="burbujas">
            <span style="--i:11;"></span>
            <span style="--i:12;"></span>
            <span style="--i:24;"></span>
            <span style="--i:10;"></span>
            <span style="--i:14;"></span>
            <span style="--i:23;"></span>
            <span style="--i:18;"></span>
            <span style="--i:16;"></span>
            <span style="--i:19;"></span>
            <span style="--i:20;"></span>
            <span style="--i:22;"></span>
            <span style="--i:25;"></span>
            <span style="--i:14;"></span>
            <span style="--i:21;"></span>
            <span style="--i:15;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
            <span style="--i:13;"></span>
            <span style="--i:26;"></span>
            <span style="--i:17;"></span>
            <span style="--i:13;"></span>
            <span style="--i:28;"></span>
            <span style="--i:16;"></span>
            <span style="--i:12;"></span>
            <span style="--i:11;"></span>
            <span style="--i:19;"></span>
            <span style="--i:26;"></span>
            <span style="--i:22;"></span>
            <span style="--i:29;"></span>
            <span style="--i:11;"></span>
            <span style="--i:16;"></span>
            <span style="--i:11;"></span>
        </div>
    </div>

    <div class="login">
        <form action="php/registro_user.php" method="post" class="form-registro">
            <h1>REGISTRO</h1>
            <div class="input-box">
                <input name="nom_r" type="text" placeholder="Nombre..." required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input name="user_r" type="text" placeholder="Usuario..." required>
                <i class="fa-solid fa-user"></i>
            </div>
            <div class="input-box">
                <input name="correo_r" type="email" placeholder="Correo..." required>
                <i class="fa-solid fa-envelope"></i>
            </div>
            <div class="input-box">
                <input name="pass_r" type="password" placeholder="Password..." required>
                <i class="fa-solid fa-lock"></i>
            </div>
            <div class="contra">
                <label>
                    <input type="checkbox">Guardar contraseña...
                </label>
                <a href="#">¿Olvidaste la contraseña?</a>
            </div>
            <button type="submit" class="btn-login">
                Registrarse
            </button>
            <div class="registro">
                <p>¿Ya tienes cuenta? 
                    <a href="login.html">Iniciar sesion</a> 
                </p>
            </div>
        </form>
    </div>
</body>
</html>