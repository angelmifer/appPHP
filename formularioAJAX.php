<?php

$Vnombre = $_GET["nombre"];
$Vmail = $_GET["mail"];
$Vedad = $_GET["edad"];
$linea = <<<LINEA
        <ul>
            <li>$Vnombre</li>
            <li>$Vmail</li>
            <li>$Vedad</li>
        </ul>
        LINEA;
echo $linea;
