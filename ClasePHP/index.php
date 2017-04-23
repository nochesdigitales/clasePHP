<?PHP
$boton=$_POST["boton"];

if($boton=="Listado General"){
		echo "<script>window.location='listadogeneral.php'</script>";
}
if($boton=="Listado Especifico"){
		echo "<script>window.location='buscarcedula.php'</script>";		
}
if($boton=="Listado Hombres"){
		echo "<script>window.location='listadohombres.php'</script>";		
}
if($boton=="Listado Mayores"){
		echo "<script>window.location='listadomayores.php'</script>";		
}
if($boton=="Listado Menores"){
		echo "<script>window.location='listadomenores.php'</script>";		
}
if($boton=="Listado Mujeres"){
		echo "<script>window.location='listadomujeres.php'</script>";		
}
if($boton=="Registro de Personas"){
		echo "<script>window.location='registropersonas.php'</script>";		
}
if($boton=="Manual"){
    echo "<script>window.location='manual.pdf'</script>";   
}
?>
<!DOCTYPE html>
<html>
<head>
<meta>
<link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>
<form action="" method="post">        
  <center><table>
  	<tr>
  		<td>
		<input type="submit" value="Registro de Personas" name="boton"  class="btn btn-default">  			
  		</td>
  		<td>
		<input type="submit" value="Listado General" name="boton"  class="btn btn-info">  			
  		</td>
  		<td>
		<input type="submit" value="Listado Especifico" name="boton"  class="btn btn-info">  			
  		</td>
  		<td>
		<input type="submit" value="Listado Mujeres" name="boton"  class="btn btn-info">  			
  		</td>
  		<td>
		<input type="submit" value="Listado Hombres" name="boton"  class="btn btn-info">  			
  		</td>
  		<td>
		<input type="submit" value="Listado Mayores" name="boton"  class="btn btn-info">  			
  		</td>
  		<td>
		<input type="submit" value="Listado Menores" name="boton"  class="btn btn-info">  			
  		</td>
      <td>
    <input type="submit" value="Manual" name="boton"  class="btn btn-default">        
      </td>
  	</tr>
  </table></center>
</form> 
</body>
</html>

