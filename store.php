<?php

include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nome = $_POST['nome']; // Recebe o nome
    $ano = $_POST['ano']; // Recebe o ano de lançamento
    $sql = "INSERT INTO cadastro (nome, ano) VALUES ('$nome', '$ano')"; // Prepara a consulta

    // Executa a consulta e verifica se foi bem-sucedida
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona para a página principal
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}



?>