<?php
    $a_bool = true;
    $a_str = "hola";
    $an_int = 12;
    $a_flo = 12.2;
    $an_arr = [1,2];
    
    // get_debug_type - obtener - el tipo de depuracion | Devuelve el nombre del tipo de la variable de una manera adecuada paraa el depurado
    echo "<h3>get_debug_type</h3>";
    echo get_debug_type($an_int);
    echo "<br>", "$a_bool".get_debug_type($a_bool);
    echo "<br>", get_debug_type($a_flo);
    echo "<br>", get_debug_type($a_str);
    echo "<br>", get_debug_type($an_arr);
    // 
?>

<style>
    h3 {
        text-align: center;
    }
</style>