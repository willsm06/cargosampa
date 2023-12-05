<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucesso na Reserva</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: var(--formulario-fundo, #d9d9d9);
            color: #000;
        }

        h1 {
            color: var(--titulo-cor, #0a24bf);
            font-size: 2em;
        }

        p {
            text-align: center;
        }

        #countdown {
            font-size: 1.5em;
            margin-top: 10px;
        }

        form {
            margin-top: 20px;
        }

        button {
            background-color: var(--titulo-cor, #0a24bf);
            color: var(--texto-branco, #ffffff);
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            font-size: 1em;
        }
    </style>
</head>
<body>
    <h1>Reserva feita com sucesso!</h1>
    
    <p>Você será redirecionado para a página inicial em <span id="countdown">10</span> segundos.</p>

    <form action="index.php" method="get">
        <button type="submit">Ir para a Página Inicial</button>
    </form>

    <script src="assets/js/cronometro.js"></script>
</body>
</html>
