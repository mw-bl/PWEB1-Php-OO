<?php
require_once 'ProcessaLivro.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro de Livro</title>
        <style>

            body {
                font-family: Arial;
            }
            .container {
                width: 300px;
                margin: 50px auto;
            }
            form {
                display: flex;
                flex-direction: column;
            }
            input[type="submit"] {
                margin-top: 10px;
                padding: 5px;
                background-color: #007BFF;
                color: white;
                border: none;
                cursor: pointer;
            }
            input[type="submit"]:hover {
                background-color: #0056b3;
            }
            .mensagem {
                margin-top: 10px;
                color: green;
            }
            .livro-detalhes {
                margin-top: 20px;
            }

        </style>
    </head>
    <body>
        <div class="container">
            <h1>Cadastro de Livro</h1>

            <form action="" method="post">
                <label for="titulo">Titulo</label>
                <input type="text" id="titulo" required>
                
                <label for="autor">Autor</label>
                <input type="text" id="autor" required>
                
                <label for="ano">Ano</label>
                <input type="number" id="ano" required>

                <input type="submit" value="Cadastrar">
            </form>

            <?php if ($livro_recuperado) : ?>
                <div class="livro-detalhes">
                    <h2>Livro Cadastrado:</h2>
                    <p><strong>Titulo:</strong> <?php echo $livro_recuperado->getTitulo(); ?></p>
                    <p><strong>Autor:</strong> <?php echo $livro_recuperado->getAutor(); ?></p>
                    <p><strong>Ano:</strong> <?php echo $livro_recuperado->getAno(); ?></p>

                </div>
            <?php endif; ?>

        </div>
    </body>
</html>
