
<html>
	<head>
	
		<title>Market</title>
	
	</head>

	<body>
	
		<form name="form1" action="insert_prod.php" method="POST">
		
			<h1><center>Market</center></h1>
			
			<table align="center">
				<tr>
					<td>
						Codigo producto
					</td>
					<td>
						<input type="text" required name="codprod" style="width:180">
					<td>
				</tr>
				<tr>
					<td>
						Nombre producto
					</td>
					<td>
						<input type="text" required name="nomprod" style="width:180">
					<td>
				</tr>
				<tr>
					<td>
						Cantidad
					</td>
					<td>
						<input type="text" required name="cantprod" style="width:180" pattern="[0-9]+" title="Numeros">
					<td>
				</tr>
				<tr>
					<td>
						Estado
					</td>
					<td>
						<select required name="estprod" style="width:180">
							<option value="">Estado</option>
							<option value="1">Habilitado</option>
							<option value="0">Deshabilitado</option>
						</select>
					<td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" value="registrar">
					<td>
				</tr>
			</table>
			
		</form>
		
		<hr>		
	</body>
</html>

<table border='1' align='center'>
	<tr>
		<th>CÒDIGO</th>
		<th>NOMBRE</th>
		<th>CANTIDAD</th>
		<th></th>
		<th></th>
	</tr>


<?php
	include ('database.php');
	
	$sql ="SELECT * FROM productos";
	$result = $conn->query($sql);
	
	if($result->num_rows >0){
		while($row = $result->fetch_assoc()){
			echo"<tr><td>".$row['codigo_prod']."</td>";
			echo"<td>".$row['nombre_prod']."</td>";
			echo"<td>".$row['cantidad']."</td>";
			echo"<td><img src='icons/edit.png' width='20'></td>";
			echo"<td><a href='deleteprod.php?cod=".$row['codigo_prod']."'><img src='icons/delete.png' width='20'></a></td></tr>";
		}
	}else{
		echo ":::No hay productos registrados:::";
	}
	//TRAER para el miercoles Enciptado MD5, Hash
?>
</table>