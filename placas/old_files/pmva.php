<?php
    require __DIR__."./vendor/autoload.php";
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Placa Média - Varejo e Atacado</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="./files/favicon.png">
    </head>

    <body class="index">
        <div class="main-block">
            <div class="header">
                Placa Média <br> Varejo e Atacado
            </div>
            <div class="body">
                <form action="pmvapdf" method="POST">
                    <input type="text" name="nome-do-produto" placeholder="Nome" maxlength="35" required>
                    <input type="text" name="embalagem" placeholder="Embalagem" maxlength="9" required>
                    <input type="number" step="0.01" name="preco-varejo" placeholder="R$ Varejo" maxlength="6" required>
                    <input type="number" step="0.01" name="preco-atacado" placeholder="R$ Atacado" maxlength="6" required>
                    <button type="submit" value="Criar Placa" class="button-placa">Criar Placa</button>
                    <button class="button-placa"><a href="./" class="font-placas">Voltar</a></button>
                </form>
            </div>
            <?php $itens = file_get_contents('./version.php'); echo $itens; ?>
        </div>
    </body>

    </html>