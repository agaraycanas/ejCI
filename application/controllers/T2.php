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
        $datos['etiqueta'] = ['uno','dos','tres','cuatro','cinco','seis','siete','ocho','nueve','diez','once','doce','trece','catorce','quince'];
        $datos['nOP'] = isset($_GET['nOP'])?$_GET['nOP']:2;
        frame($this,'t2/ej18/dos',$datos);
    }
    
    private function ej18_3() {
        $datos['n'] = isset($_GET['n'])?$_GET['n']:1;
        $datos['suma'] = $datos['n'] + 2;
        frame($this,'t2/ej18/tres',$datos);
    }
    
}
?>