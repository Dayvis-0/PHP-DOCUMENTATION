<?php
    $color = 'azul';
    $nombre = 'Dayvis';
    $edad = 20;

    /* Se tiene que usa echo para devolver un valor, necesita break y no se puede asignar a una variable */
    switch ($color) {
        case 'azul':
            $mensa = 'El color es azul'; break;
        case 'rojo':
            $mensa = 'El color es rojo'; break;
        default:
            $mensa = 'No es un color';
    }

    $mensa1 = match ($edad) {
        $edad < 2    =>  "Eres un bebe, $nombre",
        $edad < 10   =>  "Eres un niño, $nombre",
        $edad < 18   =>  "Eres un adolescente, $nombre",
        $edad === 18 =>  "Eres un mayor de edad, $nombre",
        $edad < 40   =>  "Eres un adulto joven, $nombre",
        default      =>  "Eres un viejo, $nombre",
    }
?>

<h1>
    
    <?= 'Uso de switch ' ?><br>
    <?= $mensa ?> <br>
    <?= 'Uso de match ' ?><br>
    <?= $mensa1 ?> <br>

</h1>

<style>

    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

</style>