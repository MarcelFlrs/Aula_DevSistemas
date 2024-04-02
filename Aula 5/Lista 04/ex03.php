<?php
    echo "<form action='' method='get'>";
for ($i = 0; $i < 4; $i++) {
        echo "<br><br><label for='valor'>Digite a " . ($i + 1) . "° nota: </label>
            <input name='nota" . ($i + 1) . "' type='text'>";
}
echo "<button style='margin: 15 5.7%; padding:20 3.6%; display:block' type='submit'>Enviar</button><br/></form>";

$notas[0] = $_GET["nota1"];
$notas[1] = $_GET["nota2"];
$notas[2] = $_GET["nota3"];
$notas[3] = $_GET["nota4"];

$soma = 0;
for ($i = 0; $i < count($notas); $i++) {
    $soma += $notas[$i];
}

$media = $soma / 4;

echo "A média aritmética das notas digitadas é: " . $media;