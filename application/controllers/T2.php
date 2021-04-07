<?php
class T2 extends CI_Controller {
    public function ej10() {
        frame($this,'t2/ej10');
    }
    
    public function ej11() {
        frame($this,'t2/ej11');
    }
    
    public function ej18($pantalla=1) {
        switch ($pantalla) {
            case 1:$this->ej18_1();break;
            case 2:$this->ej18_2();break;
            case 3:$this->ej18_3();break;
            default:frame($this,'_t/error');break;
        }
    }
    
    private function ej18_1() {
        frame($this,'t2/ej18/uno');
    }
    
    private function ej18_2() {
        $datos['etiqueta'] = ['uno','dos','tres','cuatro','cinco','seis','siete','ocho','nueve','diez','once','doce','trece'.'catorce','quince'];
        //$datos['etiqueta'] = ['one','two','three','cuatro','cinco','seis','siete','ocho','nueve','diez','once','doce','trece'.'catorce','quince'];
        
        frame($this,'t2/ej18/dos',$datos);
    }
    
    private function ej18_3() {
        frame($this,'t2/ej18/tres');
    }
    
}
?>