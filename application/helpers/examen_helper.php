<?php
function getMadurez($persona) {
    $sol = 'maduro';
    if ($persona->anyo >= 1995) {
        $sol = 'joven';
    }
    if ($persona->anyo < 1965) {
        $sol = 'anciano';
    }
    return $sol;
}
?>