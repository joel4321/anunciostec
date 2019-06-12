<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('escuela');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$titulo=$_POST['titulo'];
	$publicado=$_POST['publicado'];
	$carrera=$_POST['carrera'];
	$fecha=$_POST['fecha'];
	$mensaje=$_POST['mensaje'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO aviso VALUES('$titulo',
								   '$publicado',
								   '$carrera',
								   '$fecha',
								   '$mensaje')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='menu.html'>Volver</a>";
	}
?>