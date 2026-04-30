<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de resultados</title>
    <link rel="stylesheet" href="cadastro.css">
</head>
<body>

<div class="logo" >
    <img src="img/logo.Sesi.jpg" alt="">
</div>

<p class="intro" > Nessa página, você deve registrar os resultados dos jogos realizados durante a Gincana Esportiva SENAI.</p>

<p class="explicacao" >Selecione corretamente as equipes participantes, a modalidade disputada e o vencedor da partida. Essas informações serão utilizadas para calcular a pontuação e gerar a classificação geral.</p>

<p class="alerta" ><strong>Atenção:</strong> não existe empate na gincana. Toda partida deve ter um vencedor, e cada vitória soma 1 ponto para a turma.</p>

<h2>Dados do Jogo</h2>

<form action="salvar.php" method="POST">

    <label>Equipe 1:</label><br>
    <select name="equipe1" required>
        <option value="">Selecione</option>
        <option>9º ANO</option>
        <option>1º EM</option>
        <option>2º EM</option>
        <option>3º EM</option>
    </select><br><br>

    <label>Equipe 2:</label><br>
    <select name="equipe2" required>
        <option value="">Selecione</option>
        <option>9º ANO</option>
        <option>1º EM</option>
        <option>2º EM</option>
        <option>3º EM</option>
    </select><br><br>

    <label>Modalidade:</label><br>
    <select name="modalidade" required>
        <option>Vôlei</option>
        <option>Pebolim</option>
        <option>Cabo de Guerra</option>
        <option>Pênaltis</option>
        <option>Tênis de Mesa</option>
        <option>Embaixadinha</option>
        <option>Campo Minado</option>
        <option>Lance Livre</option>
        <option>Queimada</option>
    </select><br><br>

    <label>Vencedor:</label><br>
    <select name="vencedor" required>
        <option value="">Selecione</option>
        <option>9º ANO</option>
        <option>1º EM</option>
        <option>2º EM</option>
        <option>3º EM</option>
    </select><br><br>

    <button type="submit">Salvar Resultado</button>

</form>

<p>Após salvar o resultado, você pode continuar cadastrando outros jogos ou acessar a classificação para acompanhar o resultado das turmas.</p>

<a href="index.php">Voltar para a página inicial</a>

<footer>
    <p>&copy; - 2026 - Site desenvolvido como projeto escolar.<p>
</footer>
    
</body>
</html>