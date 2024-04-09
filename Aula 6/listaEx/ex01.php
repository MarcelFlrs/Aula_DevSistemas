<?php
$string1 = "Balão vermelho";
$string2 = "Balão vermelho pequeno";
$tamanhoString1 = strlen($string1);
$tamanhoString2 = strlen($string2);

echo "Tamanho de \"{$string1}\": " . $tamanhoString1 . " caracteres";
echo "<br>";
echo "Tamanho de \"{$string2}\": " . $tamanhoString1 . " caracteres";
echo "<br>";

if ($tamanhoString1 == $tamanhoString2) {
    echo "As duas strings são de tamanhos iguais";
    echo "<br>";
} else {
    echo "As duas strings são de tamanhos diferentes";
    echo "<br>";
}

if ($string1 == $string2) {
    echo "As duas strings possuem conteúdo igual";
} else {
    echo "As duas strings possuem conteúdo diferente";
}