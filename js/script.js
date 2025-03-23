// * Nombre del archivo: scripts.js 
//  Descripción: Este archivo realiza la parte de scripts de  la pagina loggin. 
//Autor: David Santiago Alfonso Guzman * Fecha de creación: 2025-03-22 
// Última modificación: 2025-03-22 
// Licencia: No aplica. 

//ejecutar funciones
document.getElementById("btn__registrarse").addEventListener("click",register);
document.getElementById("btn__iniciar-sesion").addEventListener("click",IniciarSesion);
window.addEventListener("resize",anchoPagina)

// Declaracion Variables
var contenedor_login_register = document.querySelector(".contenedor__loggin-register");
var formulario_login = document.querySelector(".formulario__loggin");
var formulario_register = document.querySelector(".formulario__register");
var caja_trasera_loggin = document.querySelector(".caja__trasera-loggin");
var caja_trasera_register = document.querySelector(".caja__trasera-register");


// funciones

//Funcion para error de ancho
function anchoPagina(){
    if(window.innerWidth > 850 ){
        caja_trasera_loggin.style.display="block";
        caja_trasera_register.style.display="block";
    }else{
        caja_trasera_register.style.display="block";
        caja_trasera_register.style.opacity="1";
        caja_trasera_loggin.style.display="none"
        formulario_login.style.display="block";
        formulario_register.style.display="none";
        contenedor_login_register.style.left="0px";
    }
}

//correccion texto pagina error
anchoPagina(); 

function register(){

    if(window.innerWidth > 850){
        formulario_register.style.display ="block";
        contenedor_login_register.style.left ="410px";
        formulario_login.style.display="none";
        caja_trasera_register.style.opacity ="0";
        caja_trasera_loggin.style.opacity="1";
    }else{
        formulario_register.style.display ="block";
        contenedor_login_register.style.left ="0px";
        formulario_login.style.display="none";
        caja_trasera_register.style.display ="none";
        caja_trasera_loggin.style.display="block";
        caja_trasera_loggin.style.opacity ="1";
    }
   
}

function IniciarSesion(){
    if(window.innerWidth > 850){
        formulario_register.style.display ="none";
        contenedor_login_register.style.left ="10px";
        formulario_login.style.display="block";
        caja_trasera_register.style.opacity ="1";
        caja_trasera_loggin.style.opacity="0";
    }else{
        formulario_register.style.display ="none";
        contenedor_login_register.style.left ="0px";
        formulario_login.style.display="block";
        caja_trasera_register.style.display ="block";
        caja_trasera_loggin.style.display="none";
    }
    
}