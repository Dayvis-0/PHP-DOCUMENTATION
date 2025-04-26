<?php
    $my_array = ["hola", "mundo"];
?>

<h1>

    <?= gettype($my_array); ?><br>
    <?= implode(", ",$my_array); ?><br>
    <?= $my_array[0]; ?><br>
    <pre><?= print_r($my_array, true); ?></pre>

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