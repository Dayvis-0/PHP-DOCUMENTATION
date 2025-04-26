<?php
    $edad = 50;
    echo '<h1>Tercera if en cada php, para no usar echo</h1>';
?>

<?php if ($edad): /* Ventaja se puede poner mucho html dentro del bloque*/?>
    <h1>Eres viejo, lo siento</h1>
<?php elseif ($edad) : /*No puede poner else if - Parse error*/?> 
    <h1>No eres viejo</h1>
<?php else : ?>
    <h1>Eres joven, felicidades</h1>
<?php endif; ?>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

</style>