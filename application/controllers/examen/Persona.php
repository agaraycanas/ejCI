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
        try {
            $this->persona_model->cPersona($nombre,$sexo,$anyo);
            prg("$nombre creado","examen/persona/r","success");
        }
        catch (Exception $e) {
            prg($e->getMessage(),"examen/persona/cGet");
        }
        
        //redirect(base_url().'examen/persona/r');
    }
    
    public function r() {
        $this->load->model('examen/persona_model');
        $data['personas'] = $this->persona_model->findAll();
        frame($this,"examen/personaR",$data);
    }

    public function rf() {
        $sexo = isset($_GET['sexo'])?$_GET['sexo']:'hombre';
        $this->load->model('examen/persona_model');
        $data['sexo'] = $sexo;
        $data['personas'] = $this->persona_model->findAllBySexo($sexo);
        frame($this,"examen/personaRF",$data);
    }
    
}
?>