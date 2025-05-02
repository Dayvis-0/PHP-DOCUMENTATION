<!--Los tipos de datos atomicos o simples son aquellos que no estan compuestos por otros tipos de datos-->
<?php 

    echo "<ul><li><strong>Tipos integrados</strong></li></ul>";
    echo "<ul><li>Tipos escalares</li></ul>";

        /* Un valor es condiderado si es de tipo: */
    echo"<ul><li>bool</li>
        <li>int</li>
        <li>float</li>
        <li>string</li>
        </ul>";
    echo "<ul><li>array</li>
        <li>object</li>
        <li>resource</li>
        <li>never</li>
        <li>void</li>
        <li>Tipos de clasesrelativas: self, parent y static</li></ul>";

    echo "<ul><li><strong>Tipo singleton</strong></li>
        <li>false</li>
        <li>true</li></ul>";

    echo "<ul><li><strong>Tipos unitarios</strong></li>
        <li>null</li></ul>";

        /*Es posible definir tipos personalizados con los siguientes. Estos se consideran tipo definidos por el usuario, o tipos de clase. */
    echo "<ul><li><strong>Tipos definidos por el usuario (generalmente llamados clases-tipos)</strong></li>
        <li>Interfaces</li>
        <li>Clases</li>
        <li>Enumeraciones</li></ul>";

    echo "<ul><li>Tipo callable</li></ul>"


?>