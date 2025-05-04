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
    $d = 2;
    $e = 2;

    function sum1() {
        $GLOBALS['e'] = $GLOBALS['d'] + $GLOBALS['e']; 
    }

    // superglobal
    function test_superglobal () {
        if (isset($_POST['name'])) {
            echo "Hola, " . $_POST['name'];
        }
    }
?>

<h3>La palabra clave <code>global</code></h3>
<p>Se usa para vincular una variable desde el ámbito global a un ámbito local</p>

<?php
    echo "<h4>Ejemplo #3 Uso de <code>global</code></h4>";
    sum();
    echo "Muestra de b sumado dentro de sum: b = $b <br>";
    echo "Muestra de c nueva que no existe en el ambito global: ", test(), "<br>";
    echo "<p>Al declarar variables \$a y \$b globales dentro de la función, todas las referencias
        a tales variables se referiran a la version global. </p>";

    echo "<h4>Ejemplo #4 Uso de <code>GLOBALS</code></h4>";
    sum1();
    echo "Muestra de b sumado dentro de sum1: d = $e <br>";
    echo "<p>El array \$GLOBALS es un array asosicativo con el nombre de la variable global como clave y 
        los contenidos de dicha <br> variable como valor del elemento array. Existe en cualquier ámbito, esto 
        ocurre porque es un superglobal</p>";

    echo "<h4>Ejemplo #5 Ejemplo que demuestra las superglobales y el ámbito</h4>";
?>

<form method="post">
    <input type="text" name="name" placeholder="Tu nombre">
    <button type="submit">Enviar</button>
</form>

<?php 
    test_superglobal(); 
?>

<h4>Nota</h4>
<p>Utilizar una clave <code>global</code> fuera de una función no es un error. Esta puede se
utilizada aun si el fichero esta incluido desde el interior de una funcion</p>

<?php 
    echo "<h4>Ejemplo #5 Ejemplo de la nota</h4>";
    $x = 10;

    function cargarArchivo() {
        include 'd.php';
    }

    cargarArchivo();
    echo "La \$x desde d.php: ", $x; // Muestra 100

?>

<table border="1">
    <thead>
        <tr>
            <th><h4>Diferencias</h4></th>
            <th><h4><code>global</code></h4></th>
            <th><h4><code>$GLOBALS</code></h4></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Se usa dentro de funciones</td>
            <td>Si</td>
            <td>Si</td>
        </tr>
        <tr>
            <td>Accede a variables globales</td>
            <td>Si</td>
            <td>Si</td>
        </tr>
        <tr>
            <td>>Necesita declaracion previa</td>
            <td>Si, con <code>global $var</code></td>
            <td>No, accedes directamente con <code>['var']</code></td>
        </tr>
        <tr>
            <td>Se ve como un array</td>
            <td>No</td>
            <td>Si (asociativo)</td>
        </tr>
    </tbody>
</table>

<style>
    :root {
        background: radial-gradient(circle, #fff, #bbb);
        padding-left: 300px;
        padding-right: 300px;
    }
    h3 {
        text-align: center;
    }
</style>