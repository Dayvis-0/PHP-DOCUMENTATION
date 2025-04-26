<?php
    $name = 'Dayvis';
    $age = 18;
 
    $output1 = "Hola $name, con una edad de $age"; 
    $output2 = "Hola \$name, con una edad de \$age"; /* Al hacer \* lo que hace es escaparla, no se muestra la variable en si */
?> 

<h1>
    <?php 
        echo $output1 . '<br>';
        echo $output2 . '<br>';
    ?> 
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