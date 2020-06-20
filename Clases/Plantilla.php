<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Clases;

/**
 * Clase para automatizar la creación de las plantillas smarty
 *
 * @author luisa
 */
use Smarty;
class Plantilla {

    public static function creaPlantilla() {

        $plantilla1 = new Smarty();
        $plantilla1->template_dir = "./plantillas";
        $plantilla1->compile_dir = "./plantillas_compiladas";
        return $plantilla1;
    }

}
