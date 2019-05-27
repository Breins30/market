<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <script> 
	function comprobarClave(){ 
		clave1 = document.f1.pswd.value 
		clave2 = document.f1.pswd2.value 

		if (clave1 == clave2) 
			document.f1.submit()
		else 
			alert("Passwords do not match") 
	} 
</script> 
</head>
<body>

<div class="container">
  <h2>Sign Up</h2>
  <p>Formulario de registro de usuarios</p>
  <form name="f1"action="uregister.php" class="was-validated" method="POST" enctype="multipart/form-data">
    <div class="form-group">
      <label for="uname">Fisrtname:</label>
      <input type="text" class="form-control" id="uname" placeholder="Enter Firstname" name="uname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="ulatname">Lastname:</label>
      <input type="text" class="form-control" id="ulastname" placeholder="Enter Lastname" name="ulastname" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
	<div class="form-group">
      <label for="id">ID:</label>
      <input type="number" class="form-control" id="id" placeholder="Enter ID" name="id" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
	<div class="form-group">
      <label for="gen">Gender:</label>
      <select class="form-control" name="gender" id="gen" >
      <option value='M'>Male</option>
	  <option value='F'>Female</option>
	  <option value='O'>Other</option>
	  </select>
	</div>
    <div class="form-group">
      <label for="uemail">Email:</label>
      <input type="email" class="form-control" id="uemail" placeholder="Enter email" name="uemail" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="pwd2">Confirmar password:</label>
      <input type="password" class="form-control" id="pwd2" placeholder="Enter password" name="pswd2" required>
      <div class="valid-feedback">Valid.</div>
      <div class="invalid-feedback">Please fill out this field.</div>
    </div>
    <div class="form-group">
      <label for="img">Image:</label><br>
      <input type="file" id="img" name="img" accept="image/png, .jpeg, .jpg, image/gif">
    </div>
    <button type="button" class="btn btn-primary" onClick="comprobarClave()">Register</button>
  </form>
</div>

</body>
</html>
