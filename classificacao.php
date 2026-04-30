<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação</title>
    <link rel="stylesheet" href="classificacao.css">
</head>
<body>

<div class="logo" >
    <img src="img/logo.Sesi.jpg" alt="">
</div>

<?php

$arquivo = "dados.json";

$ano9 = 0;
$em1 = 0;
$em2 = 0;
$em3 = 0;

if (file_exists($arquivo)) {
    $dados = json_decode(file_get_contents($arquivo), true);

    foreach ($dados as $jogo) {

        if ($jogo["vencedor"] == "9º ANO") {
            $ano9++;
        }

        if ($jogo["vencedor"] == "1º EM") {
            $em1++;
        }

        if ($jogo["vencedor"] == "2º EM") {
            $em2++;
        }

        if ($jogo["vencedor"] == "3º EM") {
            $em3++;
        }
    }
}

?>

<h1>Classificação</h1>

<p class="indica" >Aqui você pode acompanhar a pontuação das turmas na Gincana Esportiva SENAI. Cada vitória vale 1 ponto.</p>


<table border="1">
<tr>
    <th>Turma</th>
    <th>Pontos</th>
</tr>

<tr>
    <td>9º ANO</td>
    <td><?php echo $ano9; ?></td>
</tr>

<tr>
    <td>1º EM</td>
    <td><?php echo $em1; ?></td>
</tr>

<tr>
    <td>2º EM</td>
    <td><?php echo $em2; ?></td>
</tr>

<tr>
    <td>3º EM</td>
    <td><?php echo $em3; ?></td>
</tr>

</table>

<br>

<div class="botoes" >
<a href="index.php">Voltar a pagina inicial</a><br>
<a href="cadastrar_jogo.php">Cadastrar jogo</a>
</div>

<footer>
    <p>&copy; - 2026 - Site desenvolvido como projeto escolar.<p>
</footer>

</body>
</html>