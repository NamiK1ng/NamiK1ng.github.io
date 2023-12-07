<?php
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$result = $conexao->query($sql);

if ($result->num_rows > 0) {
   
    header("Location: index.html");
    exit();
    
} else {
    echo '<script type="text/javascript">
    var mensagem = alert("Erro: Nome de usuário ou senha incorretos. Tente novamente.");
    if (mensagem === null || mensagem === "") {
        
        window.location.href = "login2.html";
    } else {
        window.location.href = "login2.html";
    }
</script>'; 
}

mysqli_close($conexao);
?>