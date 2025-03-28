<?php

include('conexao.php');


$filter_query = "";
if ($_SERVER["REQUEST_METHOD"] == "GET" && (isset($_GET['data']) || isset($_GET['genero']))) {
    $data = $_GET['data'];
    $genero = $_GET['genero'];
    $filter_query = "WHERE data_publicacao >= '$data' AND genero LIKE '%$genero%'";
}


$sql = "SELECT * FROM livros $filter_query";
$result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Livros</title>
    <link rel="stylesheet" href="../biblioteca/css/catalogo.css">
</head>
<body class="catalogo">

<header>
    <h1>Catálogo de Livros</h1>
</header>



<main>
    
    <form method="GET" action="catalogo.php">
        <label for="data">Filtrar por Data:</label>
        <input type="date" id="data" name="data">

        <label for="genero">Filtrar por Gênero:</label>
        <input type="text" id="genero" name="genero" placeholder="Digite o gênero">

        <button type="submit">Filtrar</button>
    </form>

    
    <table>
        <thead>
            <tr>
                <th>Título</th>
                <th>Autor</th>
                <th>Data de Publicação</th>
                <th>Gênero</th>
                <th>Sinopse</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>" . $row['titulo'] . "</td>
                            <td>" . $row['autor'] . "</td>
                            <td>" . $row['data_publicacao'] . "</td>
                            <td>" . $row['genero'] . "</td>
                            <td>" . $row['sinopse'] . "</td>
                        </tr>";
                }
            } else {
                echo "<tr><td colspan='5'>Nenhum livro encontrado.</td></tr>";
            }
            ?>
        </tbody>
    </table>
</main>

<footer>
    <p>&copy; 2025 Biblioteca Online</p>
</footer>

</body>
</html>
