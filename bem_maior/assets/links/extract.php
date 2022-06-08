<?php
if($_POST['action'] == 'call_this') {
    set_time_limit(200);
    sleep(30);
    $zip = new ZipArchive;
    if ($zip->open('C:/users/gfctr/downloads/2075.zip') === TRUE) {
        $zip->extractTo('C:/users/gfctr/downloads/2075/');
        $zip->close();
        echo 'ok';
    } else {
        echo 'failed';
    }
}    
?>
