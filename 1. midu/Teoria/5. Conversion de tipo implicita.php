<?php
    //En la mayorida de estos casos PHP te lanza un error si se pone asi por asi, por eso se utiliza el intval
    $n1 = 39 + '1';   // Cuando un dato es entero y el otro un string entero se suman  
    $n2 = 1 + intval('11sde'); // Cuando un dato es entero y el otro dato un string comienza con numero y sigue con letra, la letras se eliminan y solo queda el numero
    $n3 = 1 + intval('hoa1'); // Cuando un dato es entero y el otro dato un string, no comienza con numero y sigue con letra, el sring se convierte en cero
    $n4 = 1 + intval(''); // Si ell string es vacio lo trata como cero  
    $age = '18';
    $age1 = 11;
    $newage = $age . '1'; // El punto sirve para concatenar strings
    $newage1 = $age1 . 1;
?>

<h1>

    <?= 'Entero + String: ';?>
    <?= $n1;?><br>
    <?= 'Entero + String inicia con nume: ';?>
    <?= $n2;?><br>
    <?= 'Entero + String no inicia con nume: ';?>
    <?= $n3;?><br>
    <?= 'Entero + String vacio: ';?>
    <?= $n4;?><br>
    <?= 'String . String concatenar: ';?>
    <?= $newage;?><br>
    <?= 'Numero . Numero concatenar: ';?>
    <?= $newage1;?><br>

</h1>

<style>

    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

</style>