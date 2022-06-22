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
        <title>Placa de Verdura</title>
        <link rel='stylesheet' href='css/style.css'>        
    </head>

    <body class='pdf'>
        <div align='center'>
            <img src='./files/logo.jpg' class='logo-verdura'>
            <p class='texto-verdura'>$nome<br>$embalagem</p>
            
            <div class='container'>
                <img src='./files/preco.png' class='logo-preco-verdura'>
                <p class='texto-preco-verdura'>R$ $pVarejo</p>
                <p class='texto-footer-verdura'>KG</p>
            </div>
            
        </div>
    </body>
    </html>
");

$dompdf->setPaper('A4', 'landscape');
$dompdf->render();

//IMPRIME CONTEUDO DO ARQUIVO NA TELA
header('Content-type: application/pdf');
echo $dompdf->output();