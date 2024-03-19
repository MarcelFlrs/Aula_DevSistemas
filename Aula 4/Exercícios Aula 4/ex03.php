<form action="" method="get">
    <label style="display:block;" for="letra"> Digite seu sexo (M ou F): </label>
    <input name="letra" type="text">

    <br>

    <button style="padding: 10;" type="submit">Enviar</button>
</form>
<?php

$letra = $_GET["letra"];

if (strtoupper($letra) == "M") {
    echo "Masculino";
} else if (strtoupper($letra) == "F") {
    echo "Feminino";
} else {
    echo "Sexo inválido!";
}


?>