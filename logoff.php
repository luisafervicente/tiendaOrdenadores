<?php
//si llego aquí con un logín se cierra la sesión
session_start();

 if (isset($_POST['volver'])) {
    session_destroy();
    unset($_SESSION);
    var_dump($_SESSION);

header("Location:index.php");

exit();
 }

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

