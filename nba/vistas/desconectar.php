<?php
     
    setCookie("sesion",null,-1); 
    unset($_SESSION["avatar"]);
    unset($_SESSION["logged"]); 
    unset($_SESSION["nombre"]); 
    unset($_SESSION["contra"]); 
    session_write_close();
    header('Location: /');