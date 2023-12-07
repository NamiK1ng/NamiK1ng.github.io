<?php

 $server = "localhost";
 $user = "root";
 $senha = "";
 $dbname = "cadastro1";

 $conexao = mysqli_connect ($server, $user, $senha, $dbname);

 if (!$conexao){

    echo "<h1> A conexão falhou : " . mysqli_connect_error() . "</h1>";
 
 }

?>