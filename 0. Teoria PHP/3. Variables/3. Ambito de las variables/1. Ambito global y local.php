<?php
    $a = 1;
    
    function test() {
        $x = 10; // Solo se puede dentro de esta funcion, si se usa fuera genera error
        
        echo $x;
    }
    
    function test2() {
        //echo $a; // Error porque no esta definida dentro de la funcion
    }

    // Funcion anonima
    $anonim = function(){
        //echo $a; // Error por uqe no esta definida dentro de la funcion
    };
    $anonim1 = function() use($a) {
        echo "Anonima usando use:",$a;
    };

    // Funcion flecha
    $b = 7;
    $arrow = fn() => "El valor de b es $b"; // heredan 

    // Archivo dentro de una funcion
    function data(){
        include "c.php";
        echo "Desde c: $nombre";
    }
?>

<h2>Ámbito de una variable</h2>
<p><strong>¿Que es el ámbito de una variable?</strong> <br>
El ámbito de una variable es el contexto en el cual la variable está definida. PHP tiene un ámbito de función  y un ámbito
global. Cualquier variable definida fuera de una funcion está limitada al ámbito global. Cuando se incluye
un archivo, el código contenido heredea el ámbito de la variable de la linea en el cual se incluye el archivo
</p>

<?php 
    echo "<h4>Ejemplo #1:  Ejemplo de una variable de ámbito global</h4>";  
    include 'b.php'; // La variable $a estara disponible en el interior de b.php
    echo "<p>La variable se puede usar dentro de otro archivo y viceversa</p>";
    data();
    echo "Pero si \$nombre genera error, no esta definida aqui";

    echo "<h4>Ejemplo:  Ejemplo de un función anonima</h4>";  
    echo "Esto \$anonim() genera un error <br>";
    $anonim1();
    echo "<p>No accede a variables externas por defecto</p>";

    echo "<h4>Ejemplo:  Ejemplo de un función flecha</h4>";  
    echo $arrow();
    echo "<p>las funciones flecha heredan automaticamente las variables del ambito padre</p>"; 

    echo "<h4>Ejemplo #2: Ejemplo de una variable de ámbito local</h4>";  
    echo "Funcino que muestra su variable que tiene dentro: ",test(), "<br>";
    echo "Esto \$x genera un error <br>";
    echo "Esto test2() genera error ya que la variable que se muestra no esta definida";
?>

<p>Si se incluye un archivo dentro de una función, las variables contenidas en el archivo llamado estarán disponibles
como si se hubieran definido dentro de la función que realiza la llamada.</p>

<style>
    :root {
        background: radial-gradient(circle, #fff, #bbb);
        padding-left: 300px;
        padding-right: 300px;
    }
    h2 {
        text-align: center;
    }
</style>