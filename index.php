<?php

   echo '<h1>Upload File to Find IP addresses and Emails</h1>';
   if(isset($_FILES['image'])){
      $errors= array();
      // $file_name = $_FILES['image']['name'];
      // $file_size =$_FILES['image']['size'];
      $file_tmp =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_parts = explode('.',$_FILES['image']['name']);
      $file_ext=strtolower(end($file_parts));
      
      if($file_ext === ".txt"){
         echo "extension not allowed, please choose a .txt file.";
      }

      define ('SITE_ROOT', realpath(dirname(__FILE__)));
      
      $dest = SITE_ROOT."/TextFile/data.txt";
      
      if(empty($errors)==true){
         move_uploaded_file($file_tmp,$dest);
         echo "<h3>File uploaded successfully<h3>";
         echo '<a href="./upload.php">Find the ip addresses and emails in the text file</a>';
      }

   } else {
      echo '
      <form action="" method="POST" enctype="multipart/form-data">
         <input type="file" name="image" />
         <input type="submit"/>
      </form>';
   }
?>