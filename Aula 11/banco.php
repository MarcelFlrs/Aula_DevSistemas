<pre><?php

        $banco = new mysqli("localhost:3307", "root", "", "bancodobrasil");
        /* echo var_dump($banco);
        echo "<br><br>----------------------------------------<br> <br>";

        $busca = $banco->query("SELECT * FROM usuarios");
        echo print_r($busca);

        // $obj = $busca->fetch_all();
        // echo print_r($obj);

        echo "<br><br>----------------------------------------<br> <br>";
        while ($obj = $busca->fetch_object()) {
            echo print_r($obj);
        }

        echo "<br><br>----------------------------------------<br> <br>";
        $busca = $banco->query("SELECT cod, usuario, nome, senha FROM usuarios WHERE usuario='gdc1000'");
        $usu = $busca->fetch_object();
        echo print_r($usu);

        echo "<br> C: " . $usu->cod;
        echo "<br> U: " . $usu->usuario;
        echo "<br> N: " . $usu->nome;
        echo "<br> S: " . $usu->senha;
        */
        ?>