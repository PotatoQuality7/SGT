<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerente</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <nav>
      <ul>
        <li><a href="../Perfil/index.php">Perfil</a></li>
        <li><a href="../Preferencias/index.html">Preferencias</a></li>
        <li><a href="../Notificacoes/index.html">Notificacoes</a></li>
        <li><a href="../Estatisticas/index.html">Estatisticas</a></li>
        <li><a href="../Pagamentos/index.html">Pagamentos</a></li>
        <li><a href="../Documentacao/index.html">Documentacao</a></li>
      </ul>
    </nav>
    <button id="criarRota">Criar Rota</button>
    <script>const deletar = <?php echo json_encode($_SESSION[deletado]) ?></>
    <script src="script.js"></script>
</body>
</html>
