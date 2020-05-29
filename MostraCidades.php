<?php
    include ("conexao.php");
    include ("sql.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <div id="corpo">
        <h1>Essas são as cidades que estão no raio de distância desejado!</h1>
    
        <form action="index.php">
            <button type="submit" id="volta">Fazer nova Pesquisa</button>
        </form>
        
        <table border=1>
            <thead>
                <tr>
                    <th>Nome da Cidade</th>
                    <th>Distância da Capital</th>
                </tr>
            </thead>
            <tbody>
                <?php while($dados = mysqli_fetch_array($con)) { ?>
                <tr>
                    <td><?php echo $dados["Nome"]; ?></td>
                    <td><?php echo $dados["distanciaCapital"]; ?></td>
                </tr>
                <?php }?>
            </tbody>

        </table>


    </div>
</body>
</html>