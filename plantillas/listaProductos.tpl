

 
 
  

    
   <div id="productos">
     
            {foreach   $productos as $producto } 
                <p><form method="POST" action="productos.php">
                     <input type="submit" name="submit" value="comprar"   />
                     <input type="hidden" name="codigo" value={$producto->getCodigo()}> 
                </form>  
                     {$producto->getNombre_corto()}:{$producto->getPVP()} euros. 
                    
            {/foreach}

       
      
        
        <br class="divisor" />
  </div>
  <div id="pie">
    <form action='logoff.php' method='post'>
        <input type='submit' name='volver' value='Desconectar usuario dwes'/>
    </form>  
  </div>     
 