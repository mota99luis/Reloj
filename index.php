<?php
	// http://localhost/reloj/index.php?h=13&m=45&s=8
	header("Content-type: image/png");
	require_once("Punto.php");
	require_once("Modelo.php");
	require_once("Vista.php");
	require_once("Controlador.php");
	$v = new Vista();;
	$ancho = 400;
	$alto = 400;
	$m = new Modelo($_GET['h'], $_GET['m'], $_GET['s'], $ancho, $alto);
	$c = new Controlador();
	$c->exhibir($m, $v); 
?>