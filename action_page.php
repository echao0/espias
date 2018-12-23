<?php

$urlM = './Mpage.html';
$urlG = './Gpage.html';

if ( $_GET['uname'] === "1" ) {
	if ( $_GET['psw'] == "1") {
	print "Hola Gabi";}
	header( "Location: $urlG" );
}

if ( $_GET['uname'] === "2" ) {
	if ( $_GET['psw'] == "22") {
		header( "Location: $urlM" );
		print "Hola Migue";}
}

print $_GET['uname'];
print  $_GET['psw'];

?>