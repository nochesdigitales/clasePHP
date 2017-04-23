<?PHP 
	//realizar la conexion desde otro archivo
   include('conexion.php');  

	
	//recibir el boton	
	$boton=$_POST["boton"];

	//recibir los datos del formulario
	$cedula = $_POST['cedula'];
	$nombre = $_POST['nombre'];
	$edad = $_POST['edad'];
	$sexo = $_POST['sexo'];
	$fecha = $_POST['fecha'];

// Almacenar los datos
if($boton=="Guardar"){
	$sql="insert into personas( cedula, nombre, edad, sexo, fecha) 
	values('$cedula', '$nombre', '$edad', '$sexo', '$fecha')";
	if(mysql_query($sql)){
		echo "<script>alert('Registro Exitoso')</script>";
		echo "<script>window.location='registropersonas.php'</script>";
	}else{
		echo "<script>alert('No registrado')</script>";
	}
	
}

// Buscar los datos
if($boton=="Buscar"){
	$sql="select * from personas where cedula='$cedula' ";
	$busqueda=mysql_query($sql);
	if($registro=mysql_fetch_array($busqueda)){
		$cedula = $registro['cedula'];
		$nombre = $registro['nombre'];
		$edad = $registro['edad'];
		$sexo = $registro['sexo'];
		$fecha = $registro['fecha'];
			}else{
		echo "<script>alert('Registro NO EXISTE en el Sistema')</script>";
	}
	
}

// Eliminar los datos
if($boton=="Eliminar"){
	if($cedula!=""){
		$sql="delete from personas where cedula='$cedula'";
		mysql_query($sql);
		echo "<script>alert('Datos ELIMINADOS Correctamente')</script>";
		echo "<script>window.location='registropersonas.php'</script>";
	}else{
		echo "<script>alert('Para poder ELIMINAR debe Realizar una busqueda')</script>";
		echo "<script>window.location='registropersonas.php'</script>";
	}
	
}

// Modificar los datos
if($boton=="Modificar"){
	if($cedula!=""){
$sql="update personas set cedula='$cedula', nombre='$nombre', edad='$edad', sexo='$sexo' where cedula='$cedula'";
		mysql_query($sql);
		echo "<script>alert('Datos Modificados Correctamente')</script>";
		echo "<script>window.location='registropersonas.php'</script>";
	}else{
		echo "<script>alert('Para poder Modificadar debe Realizar una busqueda')</script>";
		echo "<script>window.location='registropersonas.php'</script>";
	}
	
}

// Limpiar
if($boton=="Limpiar"){
		echo "<script>window.location='registropersonas.php'</script>";	
}

// Limpiar
if($boton=="Regresar"){
		echo "<script>window.location='index.php'</script>";	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Basicos de PHP</title>
<link rel="stylesheet" href="css/bootstrap.css" />
</head>
<body>
<form action="" method="post" name="form1">
  <table width="50%" border="0" align="center" cellpadding="7" cellspacing="0">
  <tr>
    <td colspan="2"><div align="center">
      <h2><strong> Registro de Alumnos </strong></h2>
    </div></td>
    </tr>
  <tr>
    <td><div align="right"><strong>Cedula:</strong></div></td>
    <td><input name="cedula" type="text" value="<?PHP echo $cedula; ?>" class="form-control"/></td>
  </tr>
  <tr>
  <tr>
    <td><div align="right"><strong>Nombre:</strong></div></td>
    <td><input name="nombre" type="text" value="<?PHP echo $nombre; ?>" class="form-control"/></td>
  </tr>
  <tr>
    <td><div align="right"><strong>Edad:</strong></div></td>
    <td><input name="edad" type="text" value="<?PHP echo $edad; ?>" class="form-control" /></td>
  </tr>
  <tr>
    <td><div align="right"><strong>Sexo:</strong></div></td>
    <td><select name="sexo" id="select" class="form-control">
			<option value="S" <?PHP if($sexo=='S'){ echo 'selected="selected"'; } ?> >.: Seleccione :.</option>
			<option value="F" <?PHP if($sexo=='F'){ echo 'selected="selected"'; } ?> >Femenino</option>
			<option value="M" <?PHP if($sexo=='M'){ echo 'selected="selected"'; } ?> >Masculino</option>
		</select>  </td>
  </tr>
  <tr>
    <td><div align="right"><strong>Fecha:</strong></div></td>
    <td><input name="fecha" type="date" size="25" maxlength="30" value="<?PHP echo $fecha; ?>" class="form-control"/></td>
  </tr
  <tr>
    <td colspan="2"><div align="center">
      <table width="80%" border="0" cellpadding="5" cellspacing="0">
        <tr>
          <td><div align="center">
            <label>
            <input type="submit" name="boton" value="Guardar" class="btn btn-info"/>
            </label>
          </div></td>
          <td><div align="center">
            <input type="submit" name="boton" value="Buscar" class="btn btn-info"/>
          </div></td>
          <td><div align="center">
            <input type="submit" name="boton" value="Eliminar" class="btn btn-info"/>
          </div></td>
          <td><div align="center">
            <input type="submit" name="boton" value="Modificar" class="btn btn-info" />
          </div></td>
		   <td><div align="center">
            <input type="submit" name="boton" value="Limpiar" class="btn btn-info"/>
		   </div></td>
		    <td><div align="center">
            <input type="submit" name="boton" value="Regresar" class="btn btn-info"/>
          </div></td>
        </tr>
      </table>
      </div></td>
    </tr>
</table>
</form>
</body>
</html>