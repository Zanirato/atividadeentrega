<link rel="stylesheet" href="update.css">
<?php
include 'conexao.php'; // Inclui o arquivo de conexão

if (isset($_GET['id'])) { // Verifica se o ID foi passado
    $id = $_GET['id']; // Recebe o ID
    $sql = "SELECT * FROM cadastro WHERE id=$id"; // Consulta o usuário
    $result = $conn->query($sql); // Executa a consulta
    $jogos = $result->fetch_assoc(); // Obtém os dados do usuário
}

// Se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome']; // Recebe o novo nome
    $ano = $_POST['ano']; // Recebe o novo ano de lançamento
    $sql = "UPDATE cadastro SET nome='$nome', ano='$ano' WHERE id=$id"; // Prepara a atualização

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php"); // Redireciona se a atualização for bem-sucedida
    } else {
        echo "Erro: " . $conn->error; // Mostra erro, se houver
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Atualizar Jogos</title>
</head>
<body>
    <h1>Atualização de cadastro de Jogos</h1>
    <form action="" method="POST">
        <label>Nome do jogo:</label>
        <input type="text" name="nome" value="<?php echo $jogos['nome']; ?>" required>
        <label>Ano de lançamento:</label>
        <input type="date" name="ano" value="<?php echo $jogos['ano']; ?>" required>
        <br>
        <input type="submit" value="Atualizar">
    </form>
    <a href="index.php">Cancelar</a> <!-- Link para voltar -->


</body>
</html>