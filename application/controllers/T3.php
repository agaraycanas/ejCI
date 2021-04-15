<?php
class T3 extends CI_Controller {
    public function ejemplo1() {
        frame($this,'t3/ejemplos/1/index');
    }
    
    public function ej12($pantalla=1) {
        switch ($pantalla) {
            case 1:$this->ej12_1();break;
            case 2:$this->ej12_2();break;
            case 3:$this->ej12_3();break;
            defaulta:$this->ej12_1();break;
        }
    }
    
    private function ej12_1() {
        if (session_status () == PHP_SESSION_NONE) {session_start ();}
        session_destroy();
        frame($this,'t3/ej12/uno');
    }
    
    private function ej12_2() {
        if (session_status () == PHP_SESSION_NONE) {session_start ();}
        $_SESSION['n'] = (isset($_SESSION['n']) ? $_SESSION['n'] : $_POST['n']);
        $_SESSION['nTotal'] = (isset($_SESSION['nTotal']) ? $_SESSION['nTotal'] : $_POST['n']);
        
        if ( isset($_SESSION['sumandos'])) {
            $_SESSION['sumandos'][] = $_POST['sumando'];
        }
        else {
            $_SESSION['sumandos'] =  [];
        }

        
        if ($_SESSION['n']==0) {
            redirect(base_url().'t3/ej12/3');
        }
        else {
            $data['nActual'] = $_SESSION['nTotal']-$_SESSION['n']+1;
            $data['nTotal'] = $_SESSION['nTotal'];
            $_SESSION['n']--;
            frame($this,'t3/ej12/dos',$data);
        }
    }

    private function ej12_3() {
        if (session_status () == PHP_SESSION_NONE) {session_start ();}
        $data['sumandos'] = $_SESSION['sumandos'];
        $data['suma'] = $this->sumar($data['sumandos']);
        frame($this,'t3/ej12/tres',$data);
    }
    
    private function sumar($sumandos) {
        $sol = 0;
        foreach ($sumandos as $s) {
            $sol += $s;
        }
        return $sol;
    }
    
}