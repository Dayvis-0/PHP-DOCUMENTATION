<?php 
    ${'invalid-name'} = 'bar';
    // Cuando se asigna una expresión a una varible, el valor completo de la expresión original se copia en la varible de destino
    $name = 'invalid-name';
    // Asignacion por referencia
    $foo = 'Bob';
    $bar1 = &$foo; 
    $bar1 = "Mi nombre es $foo"; 
    // Solo las variables con nombre pueden ser asignadas por referencia 
    //$bar2 = &(2+2); expresion invalida; referencia una expresión sin nombre

    function test () {
        return 25;
    }

    $bar3 = &test();
?>

<?php 
    echo "<h2><strong>Cómo acceder a nombres de variables con caracteres no válidos</strong></h2>";
    echo ${'invalid-name'}, " ", $$name ," <br>";
    echo "Variable asignado por referencia: $bar1 <br>";
    echo "Variable que referencia modificado: $bar1 <br>";
    echo "Variable referenciado: $foo <br>";
    echo "Variable que contiene a algo que no tiene referencia: $bar3, <br>genera error <br>";
    echo "<h3><strong>No es necesario inicializar variables en PHP, sin embargo, es una muy buena practica</strong></h3>"
?>

<style>
    :root {
        background: radial-gradient(circle, #fff, #bbb);
    }
    h2, h3{
        text-align: center;
    }
</style>