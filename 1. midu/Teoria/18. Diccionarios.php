<?php
    $my_dict = array("string" => "hola", "int" => 1);
?>

<h1>
    <?=  implode(", ", $my_dict); ?><br>
    <pre> <?= print_r($my_dict, true); ?> </pre>
    <?= $my_dict["int"]; ?>
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