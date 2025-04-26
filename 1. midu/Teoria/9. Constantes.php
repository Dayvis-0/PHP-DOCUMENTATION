<?php
    /* Primera forma de hacer constanetes, este es global */
    define('LOGO_URL', 'https://cdn.freebiesupply.com/logos/large/2x/php-1-logo-svg-vector.svg');
    /* Segunda forma de hacer constantes, es local */
    const pi = 3.14; /*No es necesario poner $*/
?>

<img src="<?=LOGO_URL?>" alt="PHP logo" width="200">

<h1>
    <?php echo pi;?>
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