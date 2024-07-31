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
        </div>
    </body>
</html>
