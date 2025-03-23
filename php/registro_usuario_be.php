<!--  
* Nombre del archivo: registro_usuario_be.php 
* Descripción: Este archivo realiza la conexion y colocar los datos del usuario en la base de datos
* Autor: David Santiago Alfonso Guzman * Fecha de creación: 2025-03-23 
* Última modificación: 2025-03-23 
* Licencia: No aplica. 
 -->

<?php

    include 'conexion_be.php';

    // Definicion de variables
    $nombre_completo = $_POST['nonmbre_completo'];
    $correo = $_POST['correo'];
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo='$correo");
    $query = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";
    $ejecutar = mysqli_query($conexion, $query);



    // Verificacion de el correo no se repita
    if(mysqli_num_rows($verificar_correo) > 0){
        echo '
        <script>
            alert("El correo ya existe Intente de nuevo");
            window.location.href="../index.php";
        </script>
        ';
    }


    // Alert para la creacion del usuario

    if($ejecutar){
        echo '
            <script> 
                alert("Usuario Creado Exitosamente");
                window.location="../index.php";
            </script>
        ';
    }else{
        echo '
        <script> 
            alert("Error en el registro");
            window.location="../index.php";
        </script>
    ';
    }


    mysqli_close($conexion);

?>