<!DOCTYPE html>
<html lang="en">
<head>
    <title>Regular Expression</title>
</head>
<body>

<?php
    $dataFile = fopen("data.txt","r") or die("unable to open file!");
    $fileSize = filesize("data.txt");
    $textFileData = fread($dataFile, $fileSize);
    
    echo '<p>'.$textFileData.'</p>';

    fclose($dataFile);

    $IPregx = "/^((25[0-5]|(2[0-4]|1[0-9]|[1-9]|)[0-9])(\.(?!$)|$)){4}$/";
    $components = preg_split($IPregx, $textFileData, -1, PREG_SPLIT_OFFSET_CAPTURE);
    print_r($components);
?>

</body>
</html>

