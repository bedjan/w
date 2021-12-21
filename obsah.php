<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<base target="_blank">
<title>Osobní stránky</title>
</head>

<body>



<p>
<a href="index.php?sekce=index">Úvodní strana</a>
<a href="index.php?sekce=multimedia">Multimedia</a>
<a href="index.php?sekce=linux">Linux</a>
<a href="index.php?sekce=linux-cli">Linux-cli</a>
<a href="index.php?sekce=ekologie">Ekologie</a> 
<a href="index.php?sekce=php">Php</a> 
<a href="index.php?sekce=germanismy">Germanismy</a> 
<a href="index.php?sekce=vyziva">Výživa</a> 
<a href="index.php?sekce=lecba">Léčba</a> 
<a href="index.php?sekce=polstina">Polština</a>
</p>


<hr>

<form method="get" action="http://www.google.com/search">

<table border="0" align="left" cellpadding="0">
<tr><td>
<input type="text"   name="q" size="25"
maxlength="255" value="" />
<input type="submit" value="Google" /></td></tr>
<tr><td align="left" style="font-size:75%">

</td></tr></table>

</form>
<p><br /></p>
<form method="get" action="https://duckduckgo.com/?q=%s">

<table border="0" align="left" cellpadding="0">
<tr><td>
<input type="text"   name="q" size="25"
maxlength="255" value="" />
<input type="submit" value="Duckduckgo" /></td></tr>
<tr><td align="left" style="font-size:75%">

</td></tr></table>

</form>
<br />



<?php
error_reporting(E_ALL ^ E_NOTICE);

/* do proměnné $sekce uložíme hodnotu proměnné sekce z url */
$sekce = $_GET["sekce"];

if ($sekce == ""){
$sekce = "index";
}
?>

<?php
$filename = 'Parsedown.php';

if (file_exists($filename)) {

} else {
copy("https://raw.githubusercontent.com/erusev/parsedown/master/Parsedown.php", "Parsedown.php");
//copy("https://raw.githubusercontent.com/bedjan/w/main/Parsedown.php", "Parsedown.php");
}
?>





<?php
if ($sekce == "index"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/web.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "multimedia"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/mm.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}


if ($sekce == "linux"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/linux.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "linux-cli"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/linux-cli.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "ekologie"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/ekologie.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "php"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/php.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "germanismy"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/germanismy.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "vyziva"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/vyziva.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "lecba"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/lecba.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

if ($sekce == "polstina"){
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/polstina.md');
$Parsedown = new Parsedown();
echo $Parsedown->text($html);
}

?>





</body>
</html>
