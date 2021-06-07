<?php
class Msg extends CI_Controller {
    public function index() {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        
        $mensaje = isset($_SESSION['_mensaje'])?$_SESSION['_mensaje']:'Pulsa un botón para volver al menú principal';
        $link = isset($_SESSION['_link'])?$_SESSION['_link']:'';
        $severidad = isset($_SESSION['_severidad'])?$_SESSION['_severidad']:'success';
        
        unset($_SESSION['_mensaje']);
        unset($_SESSION['_link']);
        unset($_SESSION['_severidad']);
        
        $datos['mensaje'] = $mensaje;
        $datos['link'] = $link;
        $datos['severidad'] = $severidad;
        
        frame($this,'_t/msg',$datos);
    }
}
?>