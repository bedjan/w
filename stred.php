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
