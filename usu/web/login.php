<?php
include_once '../lib/helpers.php';

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <script src="css/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/estilos2.css">
</head>
<body>

        <main>

            <div class="contenedor__todo">
                <div class="caja__trasera">
                    <div class="caja__trasera-login">
                        <h3>¿Ya te registraste?</h3>
                        <p>Inicia sesión para ingresar a la escuela gastronomica</p>
                        <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                    </div>
                    <div class="caja__trasera-register">
                        <h3>¿Aún no te registraste?</h3>
                        <p>Regístrate para que puedas iniciar sesión</p>
                        <button id="btn__registrarse">Regístrarse</button>
                    </div>
                </div>

                <!--Formulario de Login y registro-->
                <div class="contenedor__login-register">
                    <!--Login-->
                    <form action="<?php echo getUrl("Acceso", "Acceso", "login") ?>" method="POST" class="formulario__login">
                        <h2>Iniciar Sesión</h2>
                        <input type="text" required="required"  name="usu_correo" placeholder="Correo Electronico">
                        <input required="required"  type="password"  name="usu_pass" placeholder="Contraseña">
                        <button type="submit">Entrar</button>
                    </form>

                    <!--Register-->
                    <form action="<?php echo getUrl("Registro", "Registro", "postRegister") ?>" method="POST" class="formulario__register">
                        <h2>Regístrarse</h2>
                        <input type="text" required="required" name="usu_nombre" placeholder="P nombre">
                        <input type="text" required="required" name="usu_nombre2" placeholder="S nombre">
                        <input type="text" required="required" name="usu_apellido" placeholder="Apellidos">
                        <input type="number" required="required" name="usu_ntelefono" placeholder="Telefono">
                        <input type="text" required="required" name="usu_correo" placeholder="Correo Electronico">
                        <input type="password" required="required" name="usu_password" placeholder="Contraseña">
                        <input type="password" required="required" name="usu_password2" placeholder="Confirmar Contraseña">
                        <button type="submit">Regístrarse</button>
                    </form>
                </div>
            </div>

        </main>
        <script src="js/script.js"></script> 
    </body>

</html>