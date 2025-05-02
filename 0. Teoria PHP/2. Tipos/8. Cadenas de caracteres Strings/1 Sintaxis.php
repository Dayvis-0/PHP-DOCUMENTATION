<!--Un string o cadena, es una serie de caracteres donde cada caracter es el mismo que un byte.
Un string puede llegar a alcanzar hasta 2 GB de tamaño-->

<?php 
    // Entrecomillado simple
    $str_1 = 'Esto es una cadena sencilla ';
    $str_2 = 'También se puede incluir nuevas lineas en 
    un string  de esta forma, ya que es correcto hacerlo así ';
    // Para especificar una comilla simple literal, se ha de escapar con una barra invertida (\)
    $str_3 = 'Arnold una ves dijo: "I\'ll be back"';
    // Para especificar una barra invertida literal, se duplica (\\)
    $str_4 = 'Hola mundo \\';
    // Todas las demas intancias de barras invertidas seran tradatas como una barra literal
    $str_5 = 'Hola mundo \a y \b';
    $str_6 = 'Esto no expandira: \n una nueva linea';

    echo "<h2><strong>Sintaxis</strong></h2>";
    echo "<h3><strong>Entre comillado simple</strong></h3>";
    echo $str_1, "<br>";
    echo $str_2, "<br>";
    echo $str_3, "<br>";
    echo $str_4, "<br>";
    echo $str_5, "<br>";
    echo $str_6, "<br>";

    echo "<h3><strong>Entre comillado doble</strong></h3>";
    // Entrecomillado dobel:
    $str_7 = "avance de\n";
    sleep(1);
    $str_8 = "retorno de \r";

    echo $str_7, "linea", "<br>";
    echo $str_8, "<br>";
?>

<style>
    :root {
        background: radial-gradient(circle, #fff, #bbb);
    }

    h2, h3 {
        text-align: center;
    }
</style>