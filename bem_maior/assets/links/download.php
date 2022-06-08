<?php
header("Content-disposition: attachment; filename=ITENSMGV.txt");
header("Content-type: application/pdf");
readfile("//10.1.1.10/toledo/ITENSMGV.txt");
?>