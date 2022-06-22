<?php

use Dompdf\Dompdf;
use Dompdf\Options;
require __DIR__.'./vendor/autoload.php';

$options = new Options();
$options->setChroot(__DIR__);
$options->setIsRemoteEnabled(true);

//INFORMAÇÕES DO INDEX
$nome = filter_input(INPUT_POST, 'nome-do-produto');
$embalagem = filter_input(INPUT_POST, 'embalagem');
$pVarejo = filter_input(INPUT_POST, 'preco-varejo');
$pAtacado = filter_input(INPUT_POST, 'preco-atacado');
$npAtacado = $pAtacado*3;

$dompdf = new Dompdf($options);
$dompdf->loadHtml("

<!DOCTYPE html>
    <html lang='pt-br'>

    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Placa Grande - Varejo e Atacado</title>
        <link rel='stylesheet' href='css/style.css'>        
    </head>

    <body class='pdf'>
        <div align='center'>
            <img src='./files/logo.jpg' class='logo'>
            <p class='texto'>$nome<br>$embalagem</p>
            
            <div class='container'>
                <img src='./files/preco.png' class='logo-preco'>
                <p class='texto-preco-pgva'>VAREJO R$ $pVarejo<br>ATACADO R$ $pAtacado</p>
            
            </div>
            <p class='texto-footer'>A PARTIR DE<br>3 X $pAtacado = R$ $npAtacado</p>                
        </div>
    </body>
    </html>
");

$dompdf->setPaper("A4");
$dompdf->render();

//IMPRIME CONTEUDO DO ARQUIVO NA TELA
header('Content-type: application/pdf');
echo $dompdf->output();