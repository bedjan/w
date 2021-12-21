<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="css/styly.css" rel="stylesheet" type="text/css" />
</head>

<body>

<?php
error_reporting(E_ALL ^ E_NOTICE);

/* do proměnné $sekce uložíme hodnotu proměnné sekce z url */
$sekce = $_GET["sekce"];

if ($sekce == ""){
$sekce = "uvodni-strana";
}
?>

<div id="menu">
<ul>
<li><a href="index.php?sekce=index">Úvodní strana</a></li>
<li><a href="index.php?sekce=linux">Linux</a></li>
</ul>
</div>

<div id="obsah">
<?php
if ($sekce == "index"){
include('https://raw.githubusercontent.com/bedjan/w/main/Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/w/main/web.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "linux"){
include('https://raw.githubusercontent.com/bedjan/w/main/Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/w/main/linux.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}
?>
</div>
</body>
</html>
