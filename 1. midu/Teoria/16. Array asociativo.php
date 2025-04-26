<?php

    $persona = [
        "nombre" => "Dayvis",
        "edad" => 19
    ];

    echo "<h1>Primera forma de recorrer un array asociativo:</h1>";

    foreach ($persona as $clave => $valor) {
        echo "$clave: $valor <br>";
    }

?>

<h1>Segunda formma de recorrer un array asociativo</h1>

<ul>

    <?php foreach ($persona as $cla => $va) : ?>
        <li><?= "$cla: $va " ?></li>
    <?php endforeach; ?>

</ul>

<?php

    $productos = [
        ["nombre" => "Laptop", "precio" => 100],
        ["nombre" => "Telefono", "precio" => 50]
    ];

    echo "<h1>Primera forma de recorrer un array multidimenional:</h1>";

    foreach ($productos as $producto) {
        echo "Producto : " . $producto["nombre"] . " - Precio: $" . $producto["precio"] .  "<br>";
    }

?>

<h1>Segunda formma de recorrer un array multidimenional</h1>

<ul>

    <?php foreach ($productos as $pro) : ?>
        <li><?= implode(" - " , $pro) ?></li>
    <?php endforeach; ?>

</ul>

<style>
    
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

</style>