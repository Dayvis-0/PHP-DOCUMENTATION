<?php 

    $my_array = ["Hola", "mundo"];

    array_push($my_array, "dayvis");
    array_push($my_array, "dayvis");
?>

<h1>
    <pre> <?= print_r($my_array,true); ?> </pre>
    <pre> <?= print_r(array_unique($my_array),true); ?> </pre>
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