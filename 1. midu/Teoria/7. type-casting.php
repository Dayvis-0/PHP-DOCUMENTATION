<?php
    /*El type-casting - fundicion de tipos | Es cuando conviertes manualmente un valor de un tipo de dato a otro usando una conversion explicita*/

    $stri_inte = (integer) '123'; /*Las cadenas de texto se transforma en 0*/ 
    $stri_flo = (float) '123';
    $nume_bool = (boolean) 1;
    $nume_stri = (string) 12;
    $nume_arra = (array) 123;
?>

<h1>
    <?php 
    echo 'String a entero: ' . $stri_inte; echo '<br>'; 
    echo 'String a flotante: ' . $stri_flo; echo '<br>';
    echo 'Numero a booleano: ' . $nume_bool; echo '<br>';
    echo 'Numeor a string: ' . $nume_stri; echo '<br>';
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