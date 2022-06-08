<?php
    header("Content-disposition: attachment; filename=2075.zip");
    header("Content-type: application/pdf");
    readfile("http://servicos.pcinformatica.com.br/autoservico/instaladores/");
/*
$URL = "http://servicos.pcinformatica.com.br/autoservico/instaladores/Dlls/DLL_2092.zip";
$FileToSave = "C:/users/gfctr/downloads/2080/newfile.zip";
$Content = file_get_contents($URL);
file_put_contents($FileToSave, $Content);
 */
?>