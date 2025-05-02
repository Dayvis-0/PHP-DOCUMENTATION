<!-- El tipo bool solo tiene dos valores y se usa para expresar un valor de verdad. Puede ser verdadero(True) o falso(False)-->
<?php 
    $foo = True;
    $accion = "mostrar_version";
    $mos_sepa = True;

    if ($accion == "mostrar_version"){
        echo "La version es 1.23";
    }

    // Ya no es necesario comprobar si un valor es booleano en un if, ya que el mismo lo comprueba
    if ($mos_sepa) {
        echo "<h1>\n";
    }

    echo "<h3><strong>Que valores se les sonsidera falso</strong></h3>";
    echo "El string vacio, ",var_dump((bool) ""), "<br>";
    echo "El 0 ya sea con puntos decimales y negativo, ",var_dump((bool) 0), "<br>";
    echo "Un array vacio, ",var_dump((bool) array()), "<br>";
    echo "El tipo de dato null, ",var_dump((bool) NULL), "<br>";
?>