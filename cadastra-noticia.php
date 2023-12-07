<?php

    include 'conexao.php';

     $titulo = $_POST["titulo"];
     $legenda = $_POST["legenda"];
     $autor = $_POST["autor"];
     $dataehora = $_POST["dataehora"];
     $link = $_POST["link"];
     $imagem = $_POST["imagem"];

     $sql = " INSERT INTO noticias (titulo, legenda, autor, dataehora, link, imagem) VALUES ('".$titulo."', '".$legenda."', '".$autor."', '".$dataehora."', '".$link."', '".$imagem."')";

     if (mysqli_query($conexao, $sql)){

          echo "<h1>Cadastrado com sucesso</h1>";
     }
     else
     {
          echo"<h1>Erro:" . $sql . "<br>" . mysqli_error($conexao) . "</h1>";
     }
     mysqli_close($conexao);

?>