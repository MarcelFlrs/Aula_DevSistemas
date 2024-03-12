<form action="" method="get">
    <label for="num"> Digite um número:</label>
    <input name="num" id="num" type="text">

    <button type="submit">Enviar</button>
</form>

<?php


$numeroDigitado = $_GET["num"];

echo $numeroDigitado;

echo "<h3> Funções úteis</h3>";


echo "<br>Abs - Modulo: " . abs($numeroDigitado);
echo "<br>Potencia: " . abs($numeroDigitado);
echo "<br>Raiz Quadrada: " . abs($numeroDigitado);

echo "<br>Arredondar Normal: " . round($numeroDigitado);
echo "<br>Arredondar pra Cima: " . ceil($numeroDigitado);
echo "<br>Arredondar pra Baixo: " . floor($numeroDigitado);
echo "<br>Parte Inteira: " . intval($numeroDigitado);

echo "</p>";

echo "<h3> Mini Matematica</h3>";
$a = 4;
$b = 5;
$c = $a + $b;

$c = $c + 5;
$c += 5;

$b = $b + $a;
$b += $a;

$a = $a + 1;
$a += 1;
$a++;

$b = $b + 1;
$b -= 1;
$b--;

$a++;
++$a;

$b--;
--$b;

$b = 1999;

echo "<br>Valor: " . --$b;
echo "<br>Valor: " . $b--;

$var = "janela";
$$var = 10;

echo "<br>";
echo "<br> - " . $var;
echo "<br> - " . $$var;






?>