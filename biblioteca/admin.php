<?php

$host = 'localhost';
$dbname = 'biblioteca';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $data_publicacao = $_POST['data_publicacao'];
    $data_aquisicao = $_POST['data_aquisicao'];
    $genero = $_POST['genero'];
    $sinopse = $_POST['sinopse'];

    
    $sql = "INSERT INTO livros (titulo, autor, data_publicacao, data_aquisicao, genero, sinopse)
            VALUES (?, ?, ?, ?, ?, ?)";

    $stmt = $pdo->prepare($sql);

    
    if ($stmt->execute([$titulo, $autor, $data_publicacao, $data_aquisicao, $genero, $sinopse])) {
        echo "Livro cadastrado com sucesso!";
    } else {
        echo "Erro ao cadastrar o livro.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Livro</title>
    <link rel="stylesheet" href="../biblioteca/css/adm.css">
</head>
<body class="admin">
    <header>
        <h1>Cadastro de Livros</h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="catalogo.php">Catálogo</a></li>
            <li><a href="sobre.php">Sobre</a></li>
            <li><a href="contato.php">Contato</a></li>
            <li><a href="admin.php">Administrador</a></li>
        </ul>
    </nav>

    <section>
        <h2>Preencha os dados do livro</h2>
        <form method="POST" action="">
            <label for="titulo">Título</label>
            <input type="text" name="titulo" id="titulo" required>

            <label for="autor">Autor</label>
            <input type="text" name="autor" id="autor" required>

            <label for="data_publicacao">Data de Publicação</label>
            <input type="date" name="data_publicacao" id="data_publicacao" required>

            <label for="data_aquisicao">Data de Aquisição</label>
            <input type="date" name="data_aquisicao" id="data_aquisicao" required>

            <label for="genero">Gênero</label>
            <input type="text" name="genero" id="genero" required>

            <label for="sinopse">Sinopse</label>
            <textarea name="sinopse" id="sinopse" required></textarea>

            <button type="submit">Cadastrar Livro</button>
        </form>
    </section>

    <footer>
        <p>&copy; 2025 Biblioteca Online</p>
    </footer>
</body>
</html>
