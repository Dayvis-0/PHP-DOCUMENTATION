<?php 
    //Autovivificacion de array (creación automácica de un array) a partir de una varible no definida
    $unset_array[] = 'valor';
?>

<?php 
    echo "<h2><strong>Autovivificacion de array a partir de una varible no definida</strong></h2>";
    echo "Array en la posicion 0: $unset_array[0]";
?>

<style>
    :root {
        background: radial-gradient(circle, #fff, #bbb);
    }
    h2 {
        text-align: center;
    }
</style>