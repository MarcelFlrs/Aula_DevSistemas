<form action="" method="get">
    <label style="display:block;" for="valor"> Digite um número</label>
    <input name="valor" type="text">
    <br>

    <button style="padding: 10;" type="submit">Enviar</button>
</form>

<?php 

$valor = $_GET["valor"];
    if ($valor < 0) {
        echo "O número ". $valor ." é negativo";
    }else{
        echo "O número ". $valor ." é positivo";
    }


?>