<?php
session_start ();
?>




<!DOCTYPE html>
<meta charset="UTF-8">
<base target="_blank">
<html lang="en">
<head>
</head>
<body>

<a href="index.php">Domů</a> 
<a href="index.php?page=linux">Linux</a> 
<a href="index.php?page=mm">Multimedia</a> 
<a href="index.php?page=zeny">Zeny</a> 







<?php
# vykreslení obsahu
$pathToFile = "./page/" . $_GET["page"] . ".php";
if (file_exists($pathToFile)) {
    include $pathToFile;
} else {
    include "./page/web.php";
}
?>






</body>
</html>
