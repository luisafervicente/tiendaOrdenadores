<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 5 : Programación orientada a objetos en PHP -->
<!-- Tienda Web de Luisa: login.php -->
<html>
<head>
  <meta http-equiv="content-type" content="text/html charset:UTF-8">
  <title>Tienda de Luisa: Login Tienda Web con Plantillas</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>

<body>
    <div id='login'>
    <form action='index.php' method='post'>
    <fieldset >
        <legend>Login</legend>
        <div><span class='error'></span></div>
        <div class='campo'>
            <label for='nombre' >Usuario:</label><br/>
            <input type='text' name='nombre' id='usuario' maxlength="50" /><br/>
        </div>
        <div class='campo'>
            <label for='pass' >Contraseña:</label><br/>
            <input type='password' name='pass' id='password' maxlength="50" /><br/>
        </div>

        <div class='campo'>
            <input type='submit' name='submit' value='Enviar' />
        </div>
        <p>{$error}</p>
    </fieldset>
    </form>
        <hr/>
    </div>
</body>
</html>