<?php
    echo '<h1 style="text-align: center; font-size: 250%">IP addresses and Emails in the File</h1>';
    echo '<h2 style="text-align: center; font-size: 200%">File Data</h2>';
    $dataFile = fopen("./TextFile/data.txt","r") or die("unable to open file!");
    $fileSize = filesize("./TextFile/data.txt");
    $textFileData = fread($dataFile, $fileSize);
    
    echo '<p>'.$textFileData.'</p>';

    fclose($dataFile);
    echo '<h2 style="text-align: center; font-size: 200%">Emails in File</h2>';
    include 'email.php';
    echo '<h2 style="text-align: center; font-size: 200%">IP Addresses in File</h2>';
    include 'ip.php';
?>