<?php
    $lenguajes = ["PHP", "Python", "C++"];

    $lenguajes[] = "JavaScript";    

    echo "<h1>Primera forma de recorrer arrays con foreach</h1>";

    foreach ($lenguajes as $leng) {
        echo $leng . "<br>";
    }
?>

<h1>Segunda forma de recorrer arrays con foreach</h1>

<ul>

    <?php foreach ($lenguajes as $lenguaje) : ?>
        <li><?= $lenguaje ?></li>
    <?php endforeach; ?>

</ul>

<h1>Array y foreach con indice</h1>

<ul>

    <?php foreach ($lenguajes as $key => $lengua) : ?>
        <li><?= $key . ' ' . $lengua?></li>
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