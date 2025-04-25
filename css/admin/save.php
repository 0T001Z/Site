<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dados = json_encode($_POST) . PHP_EOL;
    file_put_contents("dados.txt", $dados, FILE_APPEND);
    header("Location: painel.php");
}
?>
