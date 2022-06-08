<?php
    $url = 'https://dolarhoje.com/';
    $dadosSite = file_get_contents($url);
    $var1 = explode('<span class="cotMoeda estrangeira"><span class="symbol">',$dadosSite);
    $var2 = explode('</span>',$var1[1]);
    $var3 = explode('id="estrangeiro" value="',$dadosSite);
    $var4 = explode('"/>',$var3[1]);
    $var5 = explode('<span class="cotMoeda nacional"><span class="symbol">',$dadosSite);
    $var6 = explode('</span>',$var5[1]);
    $var7 = explode('id="nacional" value="',$dadosSite);
    $var8 = explode('"/>',$var7[1]);
    echo "<p class='text-success'><b>".$var2[0]." ".$var4[0]."<br>".$var6[0]." ".$var8[0]."</b></p>";
?>