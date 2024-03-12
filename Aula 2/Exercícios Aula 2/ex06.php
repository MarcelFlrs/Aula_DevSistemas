<form action="" method="get">
    <label style="display:block;" for=" num1"> Digite o valor de um dos lados do quadrado ▼</label>
    <input name="num1" type="text">
    <br>
</form>

<?php

$lado = $_GET["num1"];

echo "O dobro da área do quadrado é: " . pow($lado, 2) * 2;

?>