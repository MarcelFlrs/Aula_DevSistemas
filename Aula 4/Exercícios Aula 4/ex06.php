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

    if($num1 > $num2 && $num1 > $num3){
        echo  "O número maior é o primeiro: " . $num1;
    }else if($num2 > $num3){
        echo "O maior número é o segundo: " . $num2;
    }else{
        echo "O mairo número é o terceiro: " . $num3;
    }
?>