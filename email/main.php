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
    
    $words = explode(" ", $textFileData);

    $IPregx = "/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/";

    echo "<ul>";
    foreach($words as $word){
        if(preg_match($IPregx, $word) == 1){
            echo "<li>".$word."</li>";
        }
    }
    echo "</ul>";

    fclose($dataFile);

?>

</body>
</html>

