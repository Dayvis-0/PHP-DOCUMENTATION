<?php
    /* Cada expresionen PHP tiene uno de llos siguientes tipos incorporados dependiendo de su valor:
    null    bool    int     float   string  array   object  callable    resource*/

    $a_bool = true; 
    $a_str = "foo";
    $a_str2 = "foo";
    $an_int = 12;

    echo get_debug_type($a_bool); 
    echo "<br>" . get_debug_type($a_str);
    echo "<br>" . get_debug_type($an_int);

    // Si este es un valor entero, incrementarlo en cuatro
    if (is_int($an_int)) {
        $an_int +=4;
    }

    // Si $a_bool es una cadena, imprimirla
    if (is_string($a_str)) {
        echo "<br>Cadena: $a_bool";
    }
?>