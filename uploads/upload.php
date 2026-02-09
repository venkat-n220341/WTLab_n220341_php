<?php

if (isset($_POST['upload'])) {

  $fileName = $_FILES['myfile']['name'];
  $tmpName  = $_FILES['myfile']['tmp_name'];

$uploadFolder = $fileName;



  if (move_uploaded_file($tmpName, $uploadFolder)) {

    echo "<h2 style='color:green;'>File Uploaded Successfully!</h2>";
    echo "<p>File Name: $fileName</p>";

    echo "<a href='download.php?file=$fileName'>
            <button style='padding:10px; background:red; color:white; border:none;'>
              Download File
            </button>
          </a>";

  } else {
    echo "<h2 style='color:red;'>File Upload Failed!</h2>";
  }
}

?>
