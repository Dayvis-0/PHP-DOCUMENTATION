<?php
    
    $edad = 20;
    $mens = ($edad > 18) ? 'Mayor de edad' : 'Menor de edad'; 

?>

<h1>

    <?= $mens; ?>

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