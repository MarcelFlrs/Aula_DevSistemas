<form action="" method="get">
    <label style="display:block;" for="num1"> Digite um numero diferente em cada caixa de texto: </label>
    <input name="num1" type="">
    <br>
    <input name="num2" type="">
    <br>
    <input name="num3" type="">

    <br>

    <button style="padding: 10;" type="submit">Enviar</button>
</form>

<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$num3 = $_GET["num3"];

$vetor = [$num1, $num2, $num3];

do {
    $troca = false;
    for ($i = 0; $i < count($vetor)-1; $i++) {
        if ($vetor[$i] < $vetor[$i + 1]) {
            $aux = $vetor[$i + 1];
            $vetor[$i + 1] = $vetor[$i];
            $vetor[$i] = $aux;
            $troca = true;
        }
    }
} while ($troca);

for ($i = 0; $i < count($vetor); $i++) {
    echo " |  " . $vetor[$i] . "  | ";
}




?>