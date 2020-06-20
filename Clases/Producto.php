<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Clases;

/**
 * Description of Producto clase para trabajar con el objeto producto y de esta manera acceder a todos 
 * sus atributos desde la aplicación
 *
 * @author luisa
 */
class Producto {
    private $nombre;
    private $nombre_corto;
    private $descripcion;
    private $codigo;
    private $PVP;
    private $familia;
    
    /**
     * 
     * @param type $datos este array es el que se consigue con la consulta   a la 
     * base de datos
     */
    function __construct($datos) {
        $this->PVP=$datos['PVP'];
        $this->codigo=$datos['cod'];
        $this->descripcion=$datos['descripcion'];
        $this->nombre=$datos['nombre'];
        $this->nombre_corto=$datos['nombre_corto'];
        $this->familia=$datos['familia'];
         
        
    }
    function getNombre() {
        return $this->nombre;
    }

    function getNombre_corto() {
        return $this->nombre_corto;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getPVP() {
        return $this->PVP;
    }


    
    
}
