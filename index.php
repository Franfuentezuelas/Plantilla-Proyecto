<?php
// como entramos por aqui a la aplicacion utilizamos el autocargador
class Principal
{
    public static function main()
    {
        require_once "micargador.php";
        require_once './helper/sesion.php';
        require_once './Vistas/Principal/layout.php';
    }
}
Principal::main();
?>
