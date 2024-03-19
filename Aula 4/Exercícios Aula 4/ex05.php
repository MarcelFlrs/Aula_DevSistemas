<form action="" method="get">
    <label style="display:block;" for="nota1"> Digite a primeira nota: </label>
    <input name="nota1" type="">
    <label style="display:block;" for="nota2"> Digite a segunda nota: </label>
    <input name="nota2" type="">

    <br>

    <button style="padding: 10;" type="submit">Enviar</button>
</form>
<?php
$nota1 = $_GET["nota1"];
$nota2 = $_GET["nota2"];

$media = ($nota1 + $nota2) / 2;

if ($media == 10) {
    echo  "Aprovado com Distinção!";
} else if ($media < 7) {
    echo "Voce foi reprovado. :(";
} else if ($media >= 7) {
    echo "Voce foi aprovado!";
}

?>