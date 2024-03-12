<form action="" method="get">
    <label style="display:block;" for=" num1"> Digite a quantidade de horas por mês ▼</label>
    <input name="num1" type="text">
    <br>
    <label style="display:block;" for="num2"> Digite o valor recebido por hora▼</label>
    <input name="num2" type="text">
    <br>

    <br>
    <button style="padding: 10;" type="submit">Enviar</button>
</form>

<?php

    $horasMes = $_GET["num1"];
    $dinPorHr = $_GET["num2"];

    echo "O total do seu salário é: " . $horasMes * $dinPorHr;

?>