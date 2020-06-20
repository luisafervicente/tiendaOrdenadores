<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Clases;

/**
 * Description of Cesta~+
 * la clase Cesta me permite recoger los productos
 * elegidos por el usuario y realizar todas las operaciones
 * necerias para realizar la venta.
 *
 * @author luisa
 */
class Cesta {
 
    private $articuloCesta = []; //el objeto cesta será un array de articulos y todos sus métodos.

 
  
 
 
    
    /**
     * 
     * @return \Clases\Cesta(una cesta)
     * 
     */
    public static function abrirCesta() {
        if (isset($_SESSION['cesta'])) {


            $cesta = unserialize($_SESSION['cesta']);
            return $cesta;
        } else {
            $cesta = new Cesta();

            return $cesta;
        }
    }
    /**
     * 
     * @param type $cod
     * 
     */
    public function llenarCesta($cod) {
        if (isset($this->articuloCesta[$cod])) {
            $this->articuloCesta[$cod]['cantidad']++;
        } else {
            $this->articuloCesta[$cod]['producto'] = BD::obtieneProducto($cod);

            $this->articuloCesta[$cod]['cantidad'] = 1;
        }
    }
/**
 * 
 * @return   articuloCesta
 */
    public function getArticuloCesta() {
        return $this->articuloCesta;
    }

    public function guardarCesta() {
        $_SESSION['cesta'] = serialize($this);
    }
/**
 * 
 * @return type :int (precio total de la cesta)
 */
    public function getPrecioTotal() {
        $precioTotal = 0;
        foreach ($this->articuloCesta as $codigo => $valor) {
            if ($valor['cantidad'] != 0) {
                $precioTotal += $valor['cantidad'] * $valor['producto']->getPVP();
            }
        }
        return $precioTotal;
    }
/**
 * 
 * @return boolean; true si la cesta esta vacia
 */
    public function cestaVacia() {
        if ($this->articuloCesta == null) {

            return true;
        } else {

            return false;
        }
    }
   
    
    
    public function vaciarCesta() {//vacia la cesta

        unset($this->articuloCesta);
    }
/**
 * 
 * @param type  string, el código del producto que queremos eleminiar,
 * si hay que de 0 elemina toda la fila de la tabla que lo referencia en la cesta, 
 * si hay mas le resta una unidad.
 */
    public function eliminarProducto($cod) {
        if ($this->articuloCesta[$cod]['cantidad'] > 0) {
            $this->articuloCesta[$cod]['cantidad']--;
        }if ($this->articuloCesta[$cod]['cantidad'] <= 0) {
            unset($this->articuloCesta[$cod]);
        }
    }
   /**
    * 
    * @return  type: int las unidades de artículos totaltes que hay en la cesta
    */ 
    
    public function getUnidades(){
        $unidadesTotales=0;
        foreach($this->articuloCesta as $elementos=>$valor){
            $unidadesTotales+=$valor['cantidad'];
        }
               return $unidadesTotales;
    }
    /**
     * 
     * @return type float: el iva de la factura
     */
    public   function getIva(){
     return ($this->getPrecioTotal()*21)/100;
      
    }
    /**
     * 
     * @return type float: el total de la suma del precio total y el iva
     */
    
    public function getTotalIva(){
        return ($this->getPrecioTotal())+($this->getIva());
        
    }
}
