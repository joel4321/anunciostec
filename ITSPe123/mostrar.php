<html><?php
	
//paso 1 es conectarnos con el servidor //esta manera ya esta obsoleta!!

	$link = mysql_connect('localhost', 'root', '');
	if(!$link){
	
	echo'No Se Pudo Establecer Conexion Con El Servidor: '. mysql_error();
	}else{
	
//Paso 2 es seleccionar la base de datos
		$base = mysql_select_db('escuela',$link);
		
 if(!$base){
			echo'No se encontro la base de datos: '.mysql_error();
		}else{
	
//Paso 3 es hacer la sentencia sql y ejecutarla
			$sql = "SELECT * FROM aviso";
			
 $ejecuta_sentencia = mysql_query($sql);
			
 if(!$ejecuta_sentencia){
 echo'hay un error en la sentencia de sql: '.$sql;
 }else{
	
//Paso 4 es traer los resultados como un array para imprirlos en pantalla
				
$escuela_aviso = mysql_fetch_array($ejecuta_sentencia);
			
}
		}
	}
?>

<!DOCTYPE hmtl>
<html>
	<head>
		<title>Mostrar Datos</title>
		
<link rel="stylesheet" type="text/css" href="estilo.css">
	</head>
	<center>
	<body>
		<h1>Avisos</h1>
		
<table>
			
 <tr>
				
  <th>titulo</th>
				
  <th>publicado</th>
				
  <th>carrera</th>

  <th>fecha</th>
					
  <th>mensaje</th>
				


				
  <?php
					
   for($i=0; $i<$escuela_aviso; $i++){
						
    echo"<tr>";
echo"<td>";
								
    echo$escuela_aviso['titulo'];
							
    echo"</td>";
							
							
    echo"<td>";
								
    echo$escuela_aviso['publicado'];
							
    echo"</td>";
							
    echo"<td>";


    echo$escuela_aviso['carrera'];
							
    echo"</td>";
							
    echo"<td>";

    echo$escuela_aviso['fecha'];
							
    echo"</td>";
							
    echo"<td>";
				
								
    echo$escuela_aviso['mensaje'];
							
    echo"</td>";
							
    echo"<td>";
														
						
   $escuela_aviso = mysql_fetch_array($ejecuta_sentencia);}
?>
			
</tr>
		
</table>
	
</body>

</html>
