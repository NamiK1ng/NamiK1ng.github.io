<?php

    include 'conexao.php';

     $nome = $_POST["nome"];
     $email = $_POST["email"];
     $senha = $_POST["senha"];

     $sql = " INSERT INTO usuarios (nome, email, senha) VALUES ('".$nome."', '".$email."','".$senha."')";

     if (mysqli_query($conexao, $sql)){
       
          echo '<script type="text/javascript">
    var mensagem = alert("Sucesso!: Você foi cadastrado com sucesso! Faça login agora!");
    if (mensagem === null || mensagem === "") {
        
        window.location.href = "login2.html";
    } else {
        window.location.href = "login2.html";
    }
</script>';

     }
     else
     {
          echo"<h1>Erro:" . $sql . "<br>" . mysqli_error($conexao) . "</h1>";
     }
     mysqli_close($conexao);  

?>