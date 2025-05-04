<?php 
    // Ejemmplo #6
    function test() {
        $a = 0;
        echo $a, "\n";
        $a++;
    }
    // Ejemplo #7
    function test1() {
        static $a = 0;
        echo $a, "\n";
        $a++;
    }
    // Ejemplo #8
    function test2() {
        static $count = 0;
        $count++;

        echo $count, "<br>";
        if ($count < 5) {
            test2();
        }
        $count--;
    }
    // Ejemplo #9: Se pueden declarar de las siguientes maneras
    function foo() {
        static $int = 0;
        static $int_1 = 1+2; 
        static $int_2 = sqrt(121);

        $int++;
        $int_1++;
        $int_2++;
        echo $int, "\n",$int_1, "\n", $int_2;
    }
?>

<h2 class="text">Uso de variables <code>static</code></h2>
<p>Una variable estática existe sólo en el ámbito local de la función, pero no pierde su valor cuando la ejecucion del 
programa abandona este ámbito</p>

<?php 
    echo "<h4>Ejemplo #6: Ejemplo que demuestra la necesidad de variables estáticas</h4>";
    echo "Funcion que muestra una variable siempre con cero en todas las llamadas: ";
    test();
    test(); 
    echo "<p>Aunque en la funcion se incrementa al final, esto no ocurre, ya que lo muestra antes que se incremente 
    esto pasara si seguimos llamando muchas veces tambien. Ahora para que funcione podemos ponerlo como estatica</p>";
    echo "<h4>Ejemplo #7: Ejemplo que del uso de las variables estáticas</h4>";
    echo "Funcion que muestra la primera llamada cero: ";
    test1();
    test1();
    echo "<p>Esto pasa por que es estatica, por lo tanto, no pierde su valor cuando la ejecucion del programa abandona 
    este ambito dee funcion</p>";
    echo "<h4>Ejemplo #8: Variables estáticas con funciones recursivas</h4>";
    test2();
    test2();
    echo "<p>Importante: Si llamamos dos veces comenzara de nuevo desde uno, ya que al hacerlo recursivo y ponerle un
    decrementador hace que la variable se vuelva como estaba al inico, si no se le pone el decrementador al llamarlo
    de nuevo solo imprimiria una vaz,ya que se quedaria con el numero que no cumple la condicion, lo muestra y termina</p>";
    echo "<h4>Ejemplo #9: Declarando variables estáticas</h4>";
    foo();
?>

<style>
    :root {
        background: radial-gradient(circle, #fff, #bbb);
        padding-left: 300px;
        padding-right: 300px;
    }
    .text {
        text-align: center;
    }
</style>