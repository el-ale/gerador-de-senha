<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de Senhas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        input[type="number"] {
            width: 50px;
            padding: 5px;
            margin: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }
        button {
            padding: 10px 20px;
            border: none;
            background-color: #007BFF;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        #senha-gerada {
            margin-top: 20px;
            font-size: 20px;
            font-weight: bold;
            word-break: break-all;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Gerador de Senhas</h1>
        <form id="form-gerador">
            <label for="tamanho">Tamanho da Senha:</label>
            <input type="number" id="tamanho" name="tamanho" value="12" min="6" max="32">
            <br>
            <button type="button" onclick="gerarSenha()">Gerar Senha</button>
        </form>
        <div id="senha-gerada"></div>
    </div>

    <script>
        function gerarSenha() {
            var tamanho = document.getElementById('tamanho').value;

            fetch('end-gerador.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'tamanho=' + tamanho
            })
            .then(response => response.text())
            .then(data => {
                document.getElementById('senha-gerada').innerText = data;
            });
        }
    </script>
</body>
</html>
