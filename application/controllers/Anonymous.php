<?php
class Anonymous extends CI_Controller {
    function index() {
        frame($this,'anonymous/home');
       //$this->load->view('anonymous/home');
    }
}
?>
