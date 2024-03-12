<form action="" method="get">
    <label style="display:block;" for=" num1"> Digite o primeiro valor:</label>
    <input name="num1" id="num1" type="text">
    <br>
    <label style="display:block;" for="num2"> Digite o segundo valor:</label>
    <input name="num2" id="num2" type="text">
    <br>
    <br>
    <button style="padding: 10;" type="submit">Enviar</button>
</form>

<?php

$valor1 = $_GET["num1"];
$valor2 = $_GET["num2"];

echo  "A soma dos valores é: " . ($valor1 + $valor2) . "<br>";

?>