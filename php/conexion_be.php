<!--  
* Nombre del archivo: conexion_be.php 
* Descripción: Este archivo realiza la conexion de la base de datos con el be. 
* Autor: David Santiago Alfonso Guzman * Fecha de creación: 2025-03-23 
* Última modificación: 2025-03-23 
* Licencia: No aplica. 
 -->
<?php


$conexion = mysqli_connect("localhost","root","","loggin_register_db");

// condicional para saber si esta conectado la base de datos 

// if($conexion){
    // echo'conectado exitosamente a la base de datos';
//}else{
  //  echo'no se ha podido conectar a la base de datos';
//}


?>