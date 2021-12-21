

<?php

    $string = file_get_contents("https://raw.githubusercontent.com/bedjan/web/main/hlavicka.php");

    if($string === FALSE) {
         echo "Could not read the file.";
    } else {
         echo $string;
    }

?>
