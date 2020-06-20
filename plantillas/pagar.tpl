<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta http-equiv="content-type" content="text/html charset:UTF-8">
  <title>Tienda de Luisa/pagar</title>
  <link href="tienda.css" rel="stylesheet" type="text/css">
</head>





{include file="factura.tpl"}

<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
  <input name="cmd" type="hidden" value="_xclick" />
               <!--
                Mi correo de pay pall identificador email ID en profile de mi cuenta de business
                -->
  <input name="business" type="hidden" value="luisafervicente@gmail.com" />
 
   <input name="shopping_url" type="hidden" value="http://luisaFernandezdwes/infenlces.com/" />
   <input name="currency_code" type="hidden" value="EUR" />
   <input name="return" type="hidden" value="http://luisaFernandezdwes/infenlces.com/" />
   <input name="notify_url" type="hidden" value="http://luisaFernandezdwes/infenlces.com/" />
   <input name="rm" type="hidden" value="2" />     
   <input type="hidden" name="item_name" value="Compra de {$nombre}">
   <input type="hidden" name="amount" value="{$cesta->getPrecioTotal()}">
   
   <input type="image" src="http://www.paypal.com/es_ES/i/btn/x-click-but01.gif" style="border:0;" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
   
</form>
 
</body>
</html>