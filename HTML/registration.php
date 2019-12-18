<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="includes/style.css">
		<title>SpaceX Raketų Sistema</title>
		<meta content="">
		</head>
	<body>
        <form action="index.php">
        <div class="imgcontainer">
              <img src="resources/registration.png" alt="Avatar" class="avatar">
            </div>
            <div class="container">
              <h1>Registruotis</h1>
              <p>Užpildykite formą norint susikurti paskyrą.</p>
              <hr>
          
              <label for="email"><b>Paštas</b></label>
              <input type="text" placeholder="Įveskite paštą" name="email" required>
          
              <label for="psw"><b>Slaptažodis</b></label>
              <input type="password" placeholder="Įveskite slaptažodį" name="psw" required>
          
              <label for="psw-repeat"><b>Pakartoti slaptažodį</b></label>
              <input type="password" placeholder="Pakartoti slaptažodį" name="psw-repeat" required>
              <hr>
          
              <p>Susikurdami paskyrą sutinkate su mūsų vartojimo taisyklėmis <a href="#">Terms & Privacy</a>.</p>
              <button type="submit" class="registerbtn">Registruotis</button>
            </div>
          
            <div class="container signin">
              <p>Jau turi paskyrą? <a href="login.php">Prisijungti</a>.</p>
            </div>
          </form>
<?php
  require_once("includes/footer.php");
?>
