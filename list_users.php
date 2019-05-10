<html>
	<head><title>All users</title></head>
	<body>
		<table border="1" align="center">
			<tr>
				<th>First name</th>
				<th>Lastname name</th>
				<th>Email</th>
				<th>Photo</th>
			</tr>
	</body>
</html>

<?php
	include "database.php";
	$n=1;
	  $sql_users="SELECT * FROM usuarios";
	  $result=$conn->query($sql_users);

	  if($result->num_rows > 0){
		  while ($row = $result->fetch_assoc()) {
			  echo "<tr><td>".$row['firstname']."</td>";
			  echo "<td>".$row['lastname']."</td>";
			  echo "<td>".$row['email']."</td>";
			  echo "<td align='center'><img src=".$row['photo']." width=50></td></tr>";
		  }
		  echo "</table>";
	  }else{
		  echo "::: No hay usuarios registrados :::";
	  }
	  
?>