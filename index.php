<!--  
* Nombre del archivo: index.php 
* Descripción: Este archivo realiza el loggin del usuario y el registro de nuevos usuarios. 
* Autor: David Santiago Alfonso Guzman * Fecha de creación: 2025-03-22 
* Última modificación: 2025-03-23 
* Licencia: No aplica. 
 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loggin y Registro</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <main>
        
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <!-- Loggin -->
                <div class="caja__trasera-loggin">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para continuar</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <!-- Registro -->
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Registrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regiístrarse</button>
                </div>
            </div>
            <!-- Formulario de Loggin y Registro -->
            <div class="contenedor__loggin-register">
                <!-- Loggin -->
                <form action="" class="formulario__loggin">
                    <h2>Inicar Sesión</h2>
                    <input type="text" placeholder="Correo Electronico">
                    <input type="password" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>
                <!-- Registro -->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Registrarse</h2>
                    <input type="text" placeholder="Nonbre Completo" name="nonmbre_completo">
                    <input type="text" placeholder="Correo Electronico" name="correo">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Registrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="js/script.js"></script>
</body>
</html>