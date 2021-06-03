<?php
class Persona_model extends CI_Model {
    function cPersona($nombre,$sexo,$anyo) {
        $persona = R::dispense('persona');
        $persona->nombre = $nombre;
        $persona->sexo= $sexo;
        $persona->anyo= $anyo;
        R::store($persona);
    }
    
    function findAll() {
        return R::findAll('persona');
    }
    function findAllBySexo($sexo) {
        return R::find('persona','sexo = ?', [ $sexo ]);
    }
    
}
?>