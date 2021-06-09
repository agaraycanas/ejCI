<?php
class Pais_model extends CI_Model {
    public function findAll() {
        return R::findAll('pais');
    }
    public function c($nombre) {
        $pais = R::dispense('pais');
        $pais->nombre = $nombre;
        R::store($pais);
    }
}
?>