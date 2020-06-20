<?php

namespace Clases;

/**
 * Description of BD clase para la conexión con la base de datos
 *
 * @author luisa
 */
use PDO;

class BD {

    private static $con = null;
     /**
      * el array de configuración esta dentro de un fichero ini
      */
    
    private static function conectar() {
        $datos = parse_ini_file("./configuracion/conexion.ini");
        $host = $datos['host'];
        $user = $datos['user'];
        $pass = $datos['pass'];
        $bd = $datos['bd'] ?? null;
        $dsn = "mysql:host=$host;dbname=$bd";
        $opciones = [];
        try {
            self::$con = new PDO($dsn, $user, $pass);
        } catch (Exception $ex) {
            die("Error conectandodndo " . $ex->getMessage());
        }
    }

    /**
     *
     * @param string $consulta
     * @param  $valores
     * @retun un array indexado con las filas (nombre->valor) o null si no existe ninguna
     * conexion
     */
    private static function ejecuta_consulta($consulta, $valores = null) {
        if (is_null(self::$con))
            self::conectar();
        try {
            $stmt = self:: $con->prepare($consulta);
            $stmt->execute($valores);
            if ($stmt->rowCount() == 0) {
                
                $rtdo = null;
            } else
            { while ($f = $stmt->fetch(PDO::FETCH_ASSOC))
            $rtdo[] = $f;}
             self::$con=null;
        } catch (Exception $ex) {

            die("Error al realizar la consulta en la base de datos," . $ex->getMessage());
        }return $rtdo;
    }

    /**
     *
     * @param string $nom
     * @param string $pass
     * @return bool,
     */
    public static function verifica_usuario(string $nom, string $pass): bool {
        $pass = md5($pass);
        $valores = [$nom, $pass];
        $consulta = "select * from usuarios where nombre=? and pass=?";
        if (self::ejecuta_consulta($consulta, $valores) == null)
            return false;
        else
            return true;
    }

    /**
     *
     * @return \me devuelve un array de los productos existentes en la bd
     */
    public static function obtieneProductos() {
        $consulta = "SELECT * from producto";
        $rtdo = self::ejecuta_consulta($consulta, null);

        $productos = [];
        foreach ($rtdo as $producto => $valor) {
            $productos[] = new Producto($valor);
        }

        return $productos;
    }

    /**
     *
     * @param type $codig
     * @return \Clases\Producto
     */
    public static function obtieneProducto($codig) {
        $consu = "SELECT * from producto where cod=?";
        $datos[] = $codig;
        $rtdo = self::ejecuta_consulta($consu, $datos);
        $producto = new Producto($rtdo[0]);

        return $producto;
    }

}
