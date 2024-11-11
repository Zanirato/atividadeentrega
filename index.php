<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="https://www.freepik.com/icon/controllers_11749873#fromView=search&page=1&position=95&uuid=20e430d8-f78f-4574-b3ec-bf56f8f75d94" type="image/x-icon">
    <title>Crud Jogos</title>
</head>
<body>
<h1>Gerenciamento de Jogos Disponíveis</h1>
    <form action="store.php" method="POST">
        <label>Nome do jogo:</label>
        <input type="text" name="nome" placeholder="Insira nome do jogo" required>
        <br>
        <label>Ano de lançamento:</label>
        <input type="date" name="ano" required>
        <br>
        <input type="submit" value="Adicionar jogo">
    </form>
    <hr>
    
    <h2>Lista de jogos</h2>

    <div>
        <?php include 'read.php'; ?>
    </div>
</body>
</html>
