<?php

function resaltar($texto)
{
    // return '<h1>'.$texto.'</h1>';
    // return "<h1>$texto</h1>";
    return <<<ADEVOLVER
        <b><i>$texto</i></b>
    ADEVOLVER;
}

function pintarRadio($name, $arrayValueLabel, $seleccionado)
{
    $html = '';
    $ck = 'checked="checked"';
    foreach ($arrayValueLabel as $k => $v) {
        $ckHTML = ($k==$seleccionado?$ck:'');
        $html .= <<<HTML
        
                        <input type="radio" name="$name" value="$k" id="id-$k" $ckHTML>
                        <label for="id-$k">$v</label><br />
        
        HTML;
    }
    return $html;
}
?>