# w

<code>
   
   
<?php
require_once ('Slimdown.php');
switch($sekce) {
   case web;    /* zmenit název*/
echo $stranka ;
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/web.md');    /* zmenit název*/
echo Slimdown::render($html);
   break;

   case linux;    /* zmenit název*/
echo $stranka ;
include('Parsedown.php');
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/linux.md');    /* zmenit název*/
echo Slimdown::render($html);
   break;


   case linux-cli;    /* zmenit název*/
echo $stranka ;
$html = file_get_contents('https://raw.githubusercontent.com/bedjan/web/main/linux.md');    /* zmenit název*/
echo Slimdown::render($html);
   break;
}
?> 

   
   </code>
