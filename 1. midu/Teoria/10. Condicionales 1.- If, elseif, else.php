<?php
    $edad = 19;
    $nota = 70;

    echo '<h1>Primer if, else</h1>';

    if ($edad > 18) {
        echo '<h1>Eres mayor de edad</h1>';
    }
    else {
        echo '<h1>Eres menor de edad</h1>';
    }
    
    echo '<h1>Segundo if, elseif, else</h1>';

    if ($edad >= 90) {
        echo '<h1>Excelente</h1>';
    }
    elseif ($edad >= 70) {
        echo '<h1>Aprobado</h1>';
    }
    else {
        echo '<h1>Reprobado</h1>';
    }

?>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

</style>