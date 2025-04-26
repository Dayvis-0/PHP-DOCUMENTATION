<?php
    // Tipos de dadts escalares
    $n1 = 123;   // Integer - enteros
    $n2 = 19.7;    // Float - flotantes
    $n3 = 'Hola mundooooooooooo';   // String - cadena de texto
    $n4 = true; // Boolean - logico 
?>

<h1>
    <?= 'Entero'; ?><br>
    <?= $n1; ?><br>
    <?= 'Flotante'; ?><br>
    <?= $n2; ?><br>
    <?= 'String'; ?><br>
    <?= $n3; ?><br>
    <?= 'Boolean'; ?><br>
    <?= $n4; ?>
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