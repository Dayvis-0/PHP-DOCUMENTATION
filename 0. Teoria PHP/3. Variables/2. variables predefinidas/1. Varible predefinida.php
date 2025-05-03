<!--PHP proporcina una gran cantidada de varibles predefinidas
Las superglobales no pueden ser usadas comovaribles varibles en el interior de funciones o metodo de clases-->

<?php 
    // Varibles variables 
    $nombre = "usuario";
    $usuario = "Dayvis";
?>

<?php
    echo "<h3><strong>Variable predefinida</strong></h3>";
    echo "<h4><strong>Variable variable</strong></h4>";
    echo "<b>\$nombre = \"$nombre\"</b><br>";
    echo "<b>\$usuario = \"$usuario\"</b><br>";
    echo "<b>\$\$nombre = \"${$nombre}\"</b><br>"; // Mejor mostrarlo al final , $$nombre

    echo "<h4><strong>Variables superglobales </strong></h4>";
    echo "<b>\$_GET['nombre]:</b>" . ($_GET['nombre'] ?? 'No definido'). "<br>";

    // Ejempl por que no se usar superglobales con variables variables
    function badUse () {
        $var = "_GET";
        // echo $$var['nombre']; 
        echo "Lanza un error <br>";
    }

    function goodUse () {
        echo "<b>Desde goodUse():</b> " . ($_GET['nombre'] ?? 'No definido') . "<br>";
    }

    badUse();
    goodUse();
?>

<style>
    :root {
        background: radial-gradient(circle, #fff, #bbb);
    }
    h3, h4 {
        text-align: center;
    }
</style>