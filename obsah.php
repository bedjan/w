<?php
$content1 = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/hlavicka.php');
file_put_contents('hlavicka.php', $content1, FILE_APPEND);
?>

<?php
$content2 = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/stred.php');
file_put_contents('hlavicka.php', $content2, FILE_APPEND);
?>

<?php
$content3 = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/paticka.php');
file_put_contents('hlavicka.php', $content3, FILE_APPEND);
?>
