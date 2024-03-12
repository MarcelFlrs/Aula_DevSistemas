<form action="" method="get">
    <label style="display:block;" for=" num1"> Digite a temperatura em °F ▼</label>
    <input name="num1" type="text">
    <br>

    <button style="padding: 10;" type="submit">Enviar</button>
</form>


<?php

$fahrenheit = $_GET["num1"];
$celsius = 5 * ($fahrenheit - 32) / 9;

echo $fahrenheit . "°F em celsius é: " . number_format($celsius, 1) . "°C";

?>