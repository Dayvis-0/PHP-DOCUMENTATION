<!--Un int es un numero del conjunto Z = {-1, 0, 1}-->
<?php 

    function foo($value): int {
        return $value;
    }

    echo "<h3><strong>Literales de enteros</strong></h3>";

    $a_1 = 1234;
    $a_2 = 0123;
    $a_3 = "0o123 - 83";
    $a_4 = 0x1A;
    $a_5 = 0b11111111;
    $a_6 = 1_234_567;
    /*Los int pueden especificarse en las siguiente notaciones:*/
    echo "Numero decimal (base 10), $a_1 <br>";    
    echo "Numero octal en cualquier version, $a_2 <br>";    
    echo "Numero octal en mayor a 8. 1, $a_3 <br>";    
    echo "Numero hexadecimal, $a_4 <br>";    
    echo "Numero binario, $a_5 <br>";    
    echo "Numero decimal  $a_6 <br>";    

    echo "<h3><strong>Desbordamiento de enteros</strong></h3>";

    $large_number = 50000000000000000000;

    echo "Un numero largo, ", var_dump($large_number), "<br>";
    echo "Sistema de g4 bits: ", var_dump(PHP_INT_MAX + 1);

    echo "<h3><trong>Division de enteros</trong></h3>";

    echo "Division de 25/7, ",var_dump(25/7), "<br>";
    echo "Division de 25/7 solo entero, ",var_dump((int)(25/7)), "<br>";
    echo "Division de 25/7 redondeo, ",var_dump(round(25/7)), "<br>";

    /*Para convertir explicitamente un valor int, utilizar (int) o (integer). Sin embargo, en la mayoria de los casos la conversion
    no es necesaria, ya que un valor sera convertido atomaticamente si un operador, funcion o estructura de control requiere un argumento int*/
    echo "<h3><trong>Division de enteros</trong></h3>";

    echo "Boolean True, ", var_dump((int) True), "<br>";
    echo "Boolean False, ", var_dump((int) False), "<br>";
    //Al convertir de float a int, el numero sera redondeado hacia cero
    echo "Flotante despues de 8.1, ", var_dump(foo(8.1)), "<br>"; // Decrated: implicit despues de 8.1
    echo "Flotante antes de 8.1, ", var_dump(foo(8.1)), "<br>"; // 8 anterior a 8.1 
    echo "Flotante 8 en ambos casos, ", var_dump(foo(8.0)), "<br>"; 
    echo "Flotante 8 en ambos casos con (int), ", var_dump((int) 8.1), "<br>"; 
    echo "Flotante 8 en ambos casos con inval(), ", var_dump(intval(8.1)), "<br>"; 

    echo "<h3><strong>Nota: </strong></h3>"; // Estos valores siempre seran cero
    echo "NaN, ", var_dump((int) NAN), "<br>";
    echo "Inf, ", var_dump((int) INF), "<br>";
    echo "-Inf, ", var_dump((int) -INF), "<br>";

    echo "<h3><strong>Advertencia</strong></h3>"; 
    echo (int) ( (0.1+0.7) * 10 ); // imprime 7!
?>

<style>
    :root {
        background:  radial-gradient(circle, #fff, #bbb);
    }
</style>