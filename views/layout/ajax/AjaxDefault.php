<?php

require '../../../config/requireoncedefault.php';
/**
 *  * esta clase es heredada para todos los ajax 
 * este ya contiene las configuraciones de 
 * los principales archivos que re quiere para su fucionameinto
 * Contiene una clase para que esta sea utilizada en los archivos heredados
 * esta sera reescrita
 */
abstract class AjaxDefault{
    protected $datos;

    public function __construct($datos)
    {
        $this->datos = $datos;
        
    }
    public function getDatos()
    {
        return $this->datos;
    }
    public function setDatos($datos)
    {
        $this->datos = $datos;

        return $this;
    }

    abstract public function  sendToController();
    
}