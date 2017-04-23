<!DOCTYPE html>
<html>
<head>
<meta>
<link rel="stylesheet" href="css/bootstrap.css" />
</head>

<body>
<table width="845" border="0" align="center">
 
   <?php 
 // Conexion  
 include('conexion.php');
 // Seleccion de la Tabla
 $consulta = "SELECT * from personas where edad < '18' ";  
 $resultado = mysql_query($consulta);
 if(mysql_num_rows($resultado) > 0){
  ?> 
    
  <tr>
    <td colspan="5"><div align="center" class="Estilo1">
      <p>CONSULTA DE PRODUCTOS    </p>
    </div></td>
  </tr>
  <tr>
    <td colspan="5"><hr /></td>
  </tr>
  <tr>
  <!-- Estructura de la Tabla Visible-->
    <td width="100"><div align="center">Ceduka</div></td>
    <td width="150"><div align="center">Nombre</div></td>
    <td width="80"><div align="center">Sexo</div></td>
    <td width="80"><div align="center">Edad</div></td>
    <td width="100"><div align="center">Fecha Nac.</div></td>
  </tr>
  <tr>
    <td colspan="5"><hr /></td>
  </tr>
 <?php
  while ($row = mysql_fetch_array($resultado)) 
  { 
    // Asignacion de los Campos de la matria a las Variables
   $cedula=$row['cedula'];
   $nombre=$row['nombre'];
   $cedula=$row['sexo'];
   $nombre=$row['edad'];
   $nombre=$row['fecha'];
    ?>
  <tr> 
   <!-- Muestra de los Datos-->
  <td width="100"><div align="center"><?php echo $row["cedula"];?></td> 
  <td width="150"><div align="center"><?php echo $row["nombre"];?></td>
  <td width="80"><div align="center"><?php echo $row["sexo"];?></td>
  <td width="80"><div align="center"><?php echo $row["edad"];?></td> 
  <td width="100"><div align="center"><?php echo $row["fecha"];?></td>

  </tr> 
   <?php
 }
 }
 else
 {
 ?>  
     <h1 align="center">No hay Alumnos Registrados</h1>
</table>
   <?php 
 } 
?>
<form method="post" action="index.php">
<input type="submit" onclick = "location='index.html" value="Regresar" name="boton"  class="btn btn-info">
</form>
</body>
</html>
