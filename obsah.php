<?php
$file = fopen ("https://raw.githubusercontent.com/bedjan/web/main/hlavicka.php", "w");
if (!$file) {
    echo "<p>Unable to open remote file for writing.\n";
    exit;
}
/* Write the data here. */
fwrite ($file, $_SERVER['HTTP_USER_AGENT'] . "\n");
fclose ($file);
?>
