<?php
class Pais extends CI_Controller {
    
    public function r() {
        $this->load->model('examen/pais_model');
        $data['paises'] = $this->pais_model->findAll();
        frame($this, "examen/paisR",$data);
    }
    
    public function c() {
        frame($this, "examen/paisC");
    }
    
    public function cPost() {
        $this->load('examen/pais_model');
        $this->pais_model->c($_POST['nombre']);
        redirect(base_url().'examen/pais/r');
    }
    

}