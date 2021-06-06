<?php

//incluimos el modelo para que lo uise el controlador
////va a ser requerido una unica vez
require_once "./model/vistasModelo.php";

class vistasControlador extends vistaModelo
{
    /*------------- Controlador para obtener la plantilla -------------*/
    public function obtener_plantilla_controlador()
    {
        # Mostramos la plantilla
        return require_once "./view/plantilla.php";
    }

    /*------------- Controlador para obtener la vistas -------------*/
    public function obtener_vistas_controlador()
    {
        # views es el configurado en htaccess
        if(isset($_GET['views'])) {
            $ruta = explode("/", $_GET['views']);
            $respuesta = vistaModelo::obtener_vistas_modelo($ruta[0]);
        }
        else
        {
            #No viene definia la variable views
            $respuesta = "login";
        }
        return $respuesta;
    }
}