<?php

interface PlugiContenido {
    public function obtenerDatos();
    public function crearContenido($datos);
    public function editarContenido($id, $datos);
    public function eliminarContenido($id);
}

class pluginEntradaBlog implements PluginContenido{

}

class pluginGaleria implements PluginContenido{

}

$plugins = array(
    new pluginEntradaBlog(),
    new pluginGaleria(),
);

foreach ($plugins as $plugin){
    $datos = $plugin->obtenerDatos();
}