<form action="" method="get">
    <label style="display:block;" for="num1"> Digite o primeiro número</label>
    <input name="num1" type="text">
    <label style="display:block;" for="num2"> Digite o segundo número</label>
    <input name="num2" type="text">
    <br>

    <button style="padding: 10;" type="submit">Enviar</button>
</form>

<?php 
    
    $num1 = $_GET["num1"];
    $num2 = $_GET["num2"];

    if ($num1 > $num2) {
        echo "Maior número: " . $num1;
    }else{
        echo "Maior número: " . $num2;
    }
    

?>