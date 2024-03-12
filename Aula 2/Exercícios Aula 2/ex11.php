<form action="" method="get">
    <label style="display:block;" for=" num1"> Digite sua altura ▼</label>
    <input name="num1" type="text">

    <button style="padding: 10;" type="submit">Enviar</button>
</form>


<?php

$altura = $_GET["num1"];
$PesIdealH = (72 * $altura) - 58;
$PesIdealM = (62.1 * $altura) - 44.7;

echo "Seu peso ideal é: " . $PesIdealH . "kg para homem <br>";
echo "Seu peso ideal é: " . $PesIdealM . "kg para mulher ";

?>