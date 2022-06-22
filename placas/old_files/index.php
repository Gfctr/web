<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placa de Ofertas - Bem Maior</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="./files/favicon.png">
</head>

<body class="index">
    <div class="main-block">
        <div class="header">
            Placa de Ofertas <br> Bem Maior
        </div>
        
        <div align="center">
            <button class="button-placas"><a href="placa-grande-varejo-e-atacado" class="font-placas">Placa Grande - Varejo e Atacado</a></button><br>
            <button class="button-placas"><a href="placa-grande" class="font-placas">Placa Grande</a></button><br>
            <button class="button-placas"><a href="placa-media-varejo-e-atacado" class="font-placas">Placa Média - Varejo e Atacado</a></button><br>
            <button class="button-placas"><a href="placa-media" class="font-placas">Placa Média</a></button><br>
            <button class="button-placas"><a href="placa-de-verdura" class="font-placas">Placa de Verduras</a></button>
            <br><br>
        </div>       

        <?php $version = file_get_contents('./version.php'); echo $version; ?>

    </div>
</body>

</html>