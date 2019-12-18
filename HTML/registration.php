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
              <h1>Register</h1>
              <p>Please fill in this form to create an account.</p>
              <hr>
          
              <label for="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
          
              <label for="psw"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
          
              <label for="psw-repeat"><b>Repeat Password</b></label>
              <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
              <hr>
          
              <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
              <button type="submit" class="registerbtn">Register</button>
            </div>
          
            <div class="container signin">
              <p>Already have an account? <a href="login.php">Sign in</a>.</p>
            </div>
          </form>
<?php
  require_once("includes/footer.php");
?>
