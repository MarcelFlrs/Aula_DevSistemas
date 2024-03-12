<form action="" method="get">
    <label style="display:block;" for=" num1"> Digite a temperatura em °C </label>
    <input name="num1" type="text">
    <button style="padding: 10;" type="submit">Enviar</button>
</form>
<?php

    $celsius = $_GET["num1"];
    $fahrenheit = (($celsius * 9) / 5) + 32;

    echo "A temperatura " . $celsius . "°C em fahrenheit é: " . number_format($fahrenheit,  1) . " °F";

?>