<?
date_default_timezone_set('America/Buenos_Aires');
session_start();

header("Cache-Control: max-age=300");

/*
header("Expires: Tue, 01 Jul 2001 06:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
*/
define("self",$_SERVER["PHP_SELF"]);
define("metodo",$_SERVER["REQUEST_METHOD"]);
define("maxsize",(1024000*8));
define("regxpag",10);
?>