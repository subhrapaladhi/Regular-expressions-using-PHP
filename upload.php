<!DOCTYPE html>
<html lang="en">
<head>
    <title>Regular Expression</title>
</head>
<body>
<h1>Program to Check the presence of emails in text file</h1>
<?php
    $dataFile = fopen("./TextFile/data.txt","r") or die("unable to open file!");
    $fileSize = filesize("./TextFile/data.txt");
    $textFileData = fread($dataFile, $fileSize);
    
    echo '<p>'.$textFileData.'</p>';

    fclose($dataFile);

    include 'email.php';
    include 'ip.php';
?>

</body>
</html>