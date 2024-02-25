<?php
	
	$conectar=@mysqli_connect('localhost','root','');
	
	if(!$conectar)
	{
		echo"No Se Pudo Conectar Con El Servidor";
	}else
	{

		$base=mysqli_select_db($conectar, 'registros');

		if(!$base)
		{
			echo"No Se Encontro La Base De Datos";			
		}
	}
	$nombre=$_POST['nombre'];
	$email=$_POST['email'];
	$mensaje=$_POST['mensaje'];

$ejecutar=mysqli_query($conectar, "INSERT INTO `datos`(`nombre`, `email`, `mensaje`) VALUES ('$nombre', '$email', '$mensaje')");

	if(!$ejecutar)
	{
		echo"Ha ocurrido un error, intente de nuevo.";
	}else
	{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>