<?php
class Persona extends CI_Controller {
    
    
    public function cGet() {
        frame($this,'examen/personaCGet');
    }
    
    public function cPost() {
        $nombre= isset($_POST['nombre']) ? $_POST['nombre'] : "John Doe";
        $sexo= isset($_POST['sexo']) ? $_POST['sexo'] : "hombre";
        $anyo= isset($_POST['anyo']) ? $_POST['anyo'] : 1999;
        
        $this->load->model('examen/persona_model');
        $this->persona_model->cPersona($nombre,$sexo,$anyo);
        
        redirect("/");
    }
    
    public function r() {
        $this->load->model('examen/persona_model');
        $data['personas'] = $this->persona_model->findAll();
        frame($this,"examen/personaR",$data);
    }
}
?>