<form action="" method="get">
    <label style="display:block;" for=" num1"> Digite a primeira nota ▼</label>
    <input name="num1" type="text">
    <br>
    <label style="display:block;" for="num2"> Digite a segunda nota ▼</label>
    <input name="num2" type="text">
    <br>
    <label style="display:block;" for="num3"> Digite a terceira nota ▼</label>
    <input name="num3" type="text">
    <br>
    <button style="padding: 10;" type="submit">Enviar</button>
</form>


<?php

$nota1 = $_GET["num1"];
$nota2 = $_GET["num2"];
$nota3 = $_GET["num3"];

echo "A média das três notas é: " . ($nota1 + $nota2 + $nota3) / 3;

?>