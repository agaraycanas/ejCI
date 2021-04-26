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
    
    public function ej2() {
        $this->load->model('t4_model');
        $this->t4_model->ej2_init();
        frame($this,'t4/ej02/index');
    }
    
    public function ej2AJAX() {
        $ccaa= isset($_GET['ccaa']) ? $_GET['ccaa'] :'desconocida';
        $this->load->model('t4_model');
        $data['provincias'] = $this->t4_model->getProvincias($ccaa);
        $this->load->view('t4/ej02/ajax',$data);
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