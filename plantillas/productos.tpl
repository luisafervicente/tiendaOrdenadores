<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<!-- Desarrollo Web en Entorno Servidor -->
<!-- Tema 5 : Programación orientada a objetos en PHP -->
<!-- Tienda Web de Luisa: login.php -->
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <title>Tienda de Luisa: Login Tienda Web con Plantillas</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>

<body class="pagproductos"> 
    <div id="encabezado">
    <h1>Listado de productos</h1>
  </div>
     
        <div id="contenedor1" style="float:right;">
           <div  id="cesta">
            {include file="cesta.tpl"}
              </div>
        </div>
            
            <div id="contenedor2">
                  {include file="listaProductos.tpl"}  
         
            </div>

  
    
    </body>
</html>