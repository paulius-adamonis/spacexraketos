<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="includes/style.css">
		<title>SpaceX Raketų Sistema</title>
		<meta content="">
		</head>
	<body>
        <form action="index.php" method="post">
            <div class="imgcontainer">
              <img src="resources/login.png" alt="Avatar" class="avatar">
            </div>
          
            <div class="container">
              <label for="uname"><b>Prisijungimo vardas</b></label>
              <input type="text" placeholder="Įveskite prisijungimo vardą" name="uname" required>
          
              <label for="psw"><b>Spaltažodis</b></label>
              <input type="password" placeholder="Įveskite slaptažodį" name="psw" required>
          
              <button type="submit">Prisijungti</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Prisiminti mane
              </label>
            </div>
          </form>
<?php
  require_once("includes/footer.php");
?>


