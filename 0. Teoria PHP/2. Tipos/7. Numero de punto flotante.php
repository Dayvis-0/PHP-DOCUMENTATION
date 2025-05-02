<?php 
    $a_1 = 1.23;
    $a_2 = 1.2e3;
    $a_3 = 7E-10;
    $a_4 = 1_123.675;

    echo "<h2><strong>Numero de punto flotante</strong></h2>";  
    echo "Primer numero de punto flotante: $a_1 <br>";
    echo "Segundo numero de punto flotante: $a_2 <br>";
    echo "Tercer numero de punto flotante: $a_3 <br>";
    echo "Cuarto numero de punto flotante: $a_4 <br>";

    echo "<h3><strong>Advertencia</strong></h3>";
    // Los números de punto flotante tinen una precisíon limitada
    $a_5 = 0.1 + 0.2;

    if ($a_5 == 0.3){
        echo "Son iguales";
    }
    else {
        echo "No son iguales \n";
        echo "0.1 + 0.2 = ", var_dump($a_5);
    }

    //Para  comporbar la igualdad de valores de punto flotante, se utiliza un limite ssuperior en el error relativo debido al redondeo
    echo "<h3><strong>Forma correcta de comparar numeros flotantes</strong></h3>";
    $a = 1.23456789;
    $b = 1.23456780;
    $epsilon = 0.00001;

    if (abs($a - $b) < $epsilon) {
        echo "true";
    }

?>

<style>
    :root {
        background: radial-gradient(circle, #fff, #bbb);
    }

    h2 {
        text-align: center;
    }
</style>