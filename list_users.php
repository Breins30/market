<html>
	<head>
		<title>All users</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<table border="0" align="center" class="table table-hover">
			<thead>
			<tr>
				<th>First name</th>
				<th>Lastname name</th>
				<th>ID</th>
				<th>Email</th>
				<th>Photo</th>
			</tr>
			</thead>
			<tbody>

<?php
	include "database.php";
	$n=1;
	  $sql_users="SELECT * FROM usuarios";
	  $result=$conn->query($sql_users);

	  if($result->num_rows > 0){
		  while ($row = $result->fetch_assoc()) {
			  echo "<tr><td>".$row['firstname']."</td>";
			  echo "<td>".$row['lastname']."</td>";
			  echo "<td>".$row['cedula']."</td>";
			  echo "<td>".$row['email']."</td>";
			  echo "<td align='center'><img src=".$row['photo']." width=50></td></tr>";
		  }
		  echo "</tbody></table>";
	  }else{
		  echo "::: No hay usuarios registrados :::";
	  }
	  
?>
		
	</body>
</html>	