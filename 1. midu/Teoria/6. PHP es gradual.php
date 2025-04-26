<?php
    /*Es gradual porque PHP te deja elegir que tan estricto quieres que sea con los tipos de datos*/

    $nume = 10;
    $text_pri1 = 'Hola';
    $decimal = 10.2;
    $boolean = true;

    /*var_dump - volcado de variables | Mestra el tipo de dato y valor de una variable, tambien indica detalles extra, como la cantidad de caracteres de un stringo la estructura de un array*/
    echo 'var_dump:'; echo '<br>';
    var_dump($nume); echo '<br>';
    var_dump($text_pri1); echo '<br>';
    var_dump($decimal); echo '<br>';
    var_dump($boolean); echo '<br>';

    echo '<br>';
    
    /*gettype - obtener | Devuelve solo el tipo de dato de una variable como string*/
    echo 'gettype:'; echo '<br>';
    echo gettype($nume); echo '<br>';
    echo gettype($text_pri1); echo '<br>';
    echo gettype($decimal); echo '<br>';
    echo gettype($boolean); echo '<br>';
?>

<h1>
    <?php echo $text_pri1; ?>
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