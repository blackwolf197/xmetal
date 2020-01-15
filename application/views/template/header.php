<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?= $title; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= base_url('props/css/bootstrap.css'); ?>">
	<link rel="stylesheet" type="text/css" href="<?= base_url('props/alertifyjs/css/alertify.css'); ?>">
	<script src="<?= base_url('props/js/jquery.js'); ?>"></script>
	<script src="<?= base_url('props/js/bootstrap.js'); ?>"></script>
	<script src="<?= base_url('props/alertifyjs/alertify.js'); ?>"></script>
	<script src="<?= base_url('props/js/validar_frutas.js');?>"></script>
	
	<style type="text/css">
		.tabl{
		border-radius: 20px;
		}
		.cajas{
			width: 50%; /*ancho de los elementos*/

		}
		.boton1{
			width: 25%; /*ancho de los elementos*/
			background: red; /*color de fondo*/
			color: white; /* color de texto*/
			padding: 5px; /*altura*/
			border-radius: 10px; /*el radio de los elemetos*/ 
			transition: all; /*efecto de transicccion o animacion para pasar de un color a otro*/
			transition-duration: .7s; /*tiempo de la transicion */

		}
		.boton1:hover{   /*encargado de la trancsicion */
			background: #916dd5;
			cursor: crosshair; /*cambia el estilo del mouse al pasar por el boton */
		}
		.boton2{
			width: 25%;
			background: #3e206d;
			color: white;
			padding: 5px;
			border-radius: 10px;
			transition: all;
			transition-duration: .7s;

		}
		.boton2:hover{
			background: #916dd5;
			cursor: crosshair;
		}
		.eli{
		border-radius: 10px; 
		transition: all; 
		transition-duration: .7s;
		}
		.eli:hover{
         background: red;
		}
	</style>

</head>


