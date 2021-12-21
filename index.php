<?php
$filename = 'obsah.php';

if (file_exists($filename)) {
copy("https://raw.githubusercontent.com/bedjan/w/main/obsah.php", "obsah.php");
include('obsah.php');
} else {
copy("https://raw.githubusercontent.com/bedjan/w/main/obsah.php", "obsah.php");
include('obsah.php');
}
?>
