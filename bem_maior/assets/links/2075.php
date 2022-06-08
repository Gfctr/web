<?php
    header("Content-disposition: attachment; filename=2075.zip");
    header("Content-type: application/pdf");
    readfile("http://servicos.pcinformatica.com.br/autoservico/instaladores/");
?>