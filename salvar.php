<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado salvo</title>
</head>
<body>

<?php

$arquivo = "dados.json";

$equipe1 = $_POST["equipe1"];
$equipe2 = $_POST["equipe2"];
$vencedor = $_POST["vencedor"];
$modalidade = $_POST["modalidade"];

$jogo = [
    "equipe1" => $equipe1,
    "equipe2" => $equipe2,
    "modalidade" => $modalidade,
    "vencedor" => $vencedor
];

if (file_exists($arquivo)) {
    $dados = json_decode(file_get_contents($arquivo), true);
} else {
    $dados = [];
}

$dados[] = $jogo;

$fp = fopen($arquivo, "w");
fwrite($fp, json_encode($dados));
fclose($fp);

?>

<h1>Resultado registrado!</h1>

<p>O resultado do jogo foi salvo com sucesso no sistema da <strong>Gincana Esportiva SENAI</strong>.</p>

<p>A pontuação já foi atualizada e pode ser visualizada na página de classificação</p>

<a href="cadastrar_jogo.php">Cadastrar outro jogo</a><br><br>
<a href="classificacao.php">Ver classificação</a><br><br>
<a href="index.php">Voltar para pagina inicial</a>


</body>
</html>