<?php

$urlM = './Mpage.html';
$urlG = './Gpage.html';
$urlN = './error.html';

if ( strval($_GET['uname']) == "0089" ) {
	if ( $_GET['psw'] === "G10") {
	header( "Location: $urlG" );

}
	
}

if ( $_GET['uname'] == "0090" ) {
	if ( $_GET['psw'] == "M10") {
		header( "Location: $urlG" );
		}
}


Print "Clave no valida, se reportará el acceso a las autoridades.";
print "<br />";
Print "En caso que usted sea un agente con carnet, por favor intentelo de nuevo"; 
//header( "Location: $urlN" );

?>