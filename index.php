<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades de Minas</title>
    <link rel="stylesheet" href="estilo.css">

    <link rel="apple-touch-icon" sizes="57x57" href="imagens/logo.ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="imagens/logo.ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="imagens/logo.ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="imagens/logo.ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="imagens/logo.ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="imagens/logo.ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="imagens/logo.ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="imagens/logo.ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="imagens/logo.ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="imagens/logo.ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="imagens/logo.ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="imagens/logo.ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="imagens/logo.ico/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff05">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff05">
</head>
<body>
   
    <div id="corpo">
        <h1>Olá, qual a distância você deseja percorrer?</h1>
        <h3>Informe a baixo o valor máximo de distância que seja.</h3>

        <div id="formulario">
            <form action="MostraCidades.php" method="GET">
                <label for="distancia">Distância: </label>
                <input type="number" name="distancia" id="distancia" class="distancia" placeholder="Digite aqui a distância" required>
                <input type="submit" value="Pesquisar" class="pesquisar" >
                <input type="reset" value="Limpar" class="limpar">
            </form>
            
        </div>
    </div>

</body>
</html>