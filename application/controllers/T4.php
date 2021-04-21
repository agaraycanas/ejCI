<?php
class T4 extends CI_Controller {
    
    public function ej1() {
        frame($this,'t4/ej01/index');
    }
    
    public function ej1AJAX() {
        $nombre = isset($_GET['nombre']) ? $_GET['nombre'] :'desconocido';
        $data['mensaje'] = $this->getMensaje($nombre);
        $this->load->view('t4/ej01/ajax',$data);
    }
    
    private function getMensaje($nombre) {
        $num = rand(1,3);
        $final = '';
        switch ($num) {
            case 1:$inicio = '¡¡ Qué pasa';$final=' !!';break;
            case 2:$inicio = 'Hola';break;
            case 3:$inicio = 'Qué tal estás';break;
        }
            $mensaje = "$inicio $nombre $final";
        return $mensaje;
    }
}