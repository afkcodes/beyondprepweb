<?php
session_start();
if(isset($_SESSION['u_uname'])){
$a = $_SESSION['u_uname'];
$FileLocation = '/log/LinkClicks/'.$a.'.txt';

/* No other customizations required. */
if( empty($_GET['link']) ) { exit; }
$f = fopen($_SERVER['DOCUMENT_ROOT'].$FileLocation,'a');
if( ! $f ) { exit; }
date_default_timezone_set("Asia/Calcutta");
fwrite($f,date('d-m-y H:i')."\t".$_SERVER['REMOTE_ADDR']."\t".$_GET['page']."  -->  ".$_GET['link']."\n");
fclose($f);

}
else{
	$FileLocation = '/log/LinkClicks/clicks.txt';

/* No other customizations required. */
if( empty($_GET['link']) ) { exit; }
$f = fopen($_SERVER['DOCUMENT_ROOT'].$FileLocation,'a');
if( ! $f ) { exit; }
date_default_timezone_set("Asia/Calcutta");
fwrite($f,date('Y-m-d H:i:s')."\t".$_SERVER['REMOTE_ADDR']."\t".$_GET['page']."  -->  ".$_GET['link']."\n");
fclose($f);
}
?>

