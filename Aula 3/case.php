<form action="" method="get">
    <label style="display:block;" for=" num1"> Digite seu sexo(F ou M) ▼</label>
    <input name="sexo" type="text">
    <br>

    <button style="padding: 10;" type="submit">Enviar</button>
</form>

<?php

$sexo = strtoupper($_GET["sexo"]);
echo "<br>Sexo BB: " . $sexo;


switch ($sexo) {
    case 'M':
        echo "<br>Voce escolheu F - Feminino";
        break;
    case 'F':
        echo "<br>Voce escolheu M - Masculino";
        break;

    default:
        echo "<br>Erro! Sexo digitado inválido!!";
        break;
}


?>