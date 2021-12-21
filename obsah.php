<?php
copy("https://raw.githubusercontent.com/bedjan/web/main/mm.php", "mm.php");
?>

<?php
copy("https://raw.githubusercontent.com/bedjan/web/main/linux.php", "linux.php");
?>


<?php
copy("https://raw.githubusercontent.com/bedjan/web/main/Parsedown.php", "Parsedown.php");

?>

<?php
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/hlavicka.md');
$html1 = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/web.md');
$html2 = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/paticka.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
echo $Parsedown->text($html1);
echo $Parsedown->text($html2);
?>




