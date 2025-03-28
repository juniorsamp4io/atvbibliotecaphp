<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contato - Biblioteca Online</title>
    <link rel="stylesheet" href="../biblioteca/css/contato.css">
</head>
<body class="contato">
    <header>
        <h1>Entre em Contato Conosco</h1>
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
        <h2>Envie-nos uma mensagem:</h2>
        <form action="#" method="post">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem:</label>
            <textarea id="mensagem" name="mensagem" rows="5" required></textarea>

            <button type="submit">Enviar</button>
        </form>

        <div>
            <h3>Redes Sociais</h3>
            <p>Nos siga nas redes sociais: Facebook | Instagram | Twitter</p>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Biblioteca Online</p>
    </footer>
</body>
</html>
