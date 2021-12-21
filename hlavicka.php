<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<base target="_blank">
<style>
body {
  background-color: black;
}
a {
  color: white;
  margin-left: 2px;
} 
p {
  color: white;
  margin-left: 2px;
} 
pre {
  color: white;
  margin-left: 2px;
} 
ul {
  color: white;
  margin-left: 2px;
} 
li {
  color: white;
  margin-left: 2px;
} 
code {
  color: white;
  margin-left: 2px;
} 
h1 {
  color: white;
  margin-left: 2px;
} 
h2 {
  color: white;
  margin-left: 2px;
} 
h3 {
  color: white;
  margin-left: 2px;
} 
h4 {
  color: white;
  margin-left: 2px;
} 
h5 {
  color: white;
  margin-left: 2px;
} 
form {
  color: white;
  margin-left: 2px;
} 
</style>

<title>Osobní stránky</title>
</head>

<body>

<?php
print("<h1>Osobní stránky</h1>");
?>

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
