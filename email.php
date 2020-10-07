<!DOCTYPE html>
<head>
    <title>Regular Expression</title>
</head>
<body>
<h1>Program to Check the presence of emails in text file</h1>
<?php
    $dataFile = fopen("./TextFile/data.txt","r") or die("unable to open file!");
    $fileSize = filesize("./TextFile/data.txt");
    $textFileData = fread($dataFile, $fileSize);
       
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

