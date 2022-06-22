<?php
    require __DIR__."./vendor/autoload.php";
?>

    <!DOCTYPE html>
    <html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Placa de Verdura</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="./files/favicon.png">
    </head>

    <body class="index">
        <div class="main-block">
            <div class="header">
                Placa de Verdura
            </div>
            <div class="body">
                <form action="imprimir-placa-de-verdura" method="POST">
                    <input type="text" name="nome-do-produto" placeholder="Nome" maxlength="35" required>
                    <input type="number" step="0.01" name="preco-varejo" placeholder="R$ Varejo" maxlength="6" required>
                    <button type="submit" value="Criar Placa" class="button-placa">Criar Placa</button>
                    <button class="button-placa"><a href="./" class="font-placas">Voltar</a></button>
                </form>
            </div>
            <?php $version = file_get_contents('./version.php'); echo $version; ?>
        </div>
    </body>

    </html>