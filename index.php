
<?php

use Clases\BD;
use Clases\Plantilla;

require "./vendor/autoload.php";
$error = $_GET['error'] ?? null;
session_start();

//creo un objeto plantilla
$plantilla = Plantilla::creaPlantilla();
 



//si existe el submit recojo el nombre y el pass y compruebo que
//es correcto
 
if (isset($_POST['submit'])) {
    //si existe submit le quito los espacios para que puedan entrar aunque se pongan espacios en el 
    //imput al principio y al final
    $nombres = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $nombre = trim($nombres);
    $passe = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_STRING);
    $pass = trim($passe);

    if (BD::verifica_usuario($nombre, $pass)) {
        $_SESSION['nombre'] = $nombre;
        //si es correcto mando al cliente a la página de productos
        header("Location:productos.php");
        exit();
    } else {
        //si no es correcto lo dejare en la página del login
        //con un mensaje
        $error = "Lo sentimos no es un usuario registrado";
        $plantilla->assign("error", $error);
        $plantilla->display('login.tpl');
    }
} else//si no hay submit clargo la plantilla
    $plantilla->display("login.tpl");
?>

