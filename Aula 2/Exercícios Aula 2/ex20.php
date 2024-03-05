<?php

    $valorProduto = 20;
    $produtoComDesconto = $valorProduto * 0.93;
    $valorDesconto = $valorProduto - $produtoComDesconto;

    echo "Valor original: " . $valorProduto . " R$ <br>";
    echo "Valor do desconto: " . $valorDesconto . " R$ <br>";
    echo "Valor com desconto: " . $produtoComDesconto . " R$ <br>";

?>