<?php 
    $a = 1;
    $b = 1;

    // Uso de global
    function sum() {
        global $a, $b; //  La palabra clave puede ser usada en uno o varias variables, deben tner el mismo nombre
        
        $b = $a + $b;
    }

    function test() {
        global $c; // Si no existe la variable global, sera creada en el ambito global y con null 

        var_dump($c);
    }

    // Uso de GLOBALS
?>

<h3>La palabra clave <code>global</code></h3>
<p>Se usa para vincular una variable desde el ámbito global a un ámbito local</p>

<?php
    echo "<h4>Ejemplo #3 Uso de global</h4>";
    sum();
    echo "Muestra de b sumado dentro de sum: b = $b <br>";
    echo "Muestra de c nueva: ", test(), "<br>";
?>

<style>
    :root {
        background: radial-gradient(circle, #fff, #bbb);
        padding-left: 50px;
        padding-right: 50px;
    }
    h3 {
        text-align: center;
    }
</style>