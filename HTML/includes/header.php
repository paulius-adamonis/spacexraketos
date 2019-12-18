<html>
	<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="includes/style.css">
				<!-- Javascript'ai -->
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jscolor/2.0.4/jscolor.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<title>SpaceX Raketų Sistema</title>
		<meta content="">
	</head>
<<<<<<< HEAD
	<body id="rect">
=======
	<body class="space-bg">
>>>>>>> fc2d42d100219170c2a8f09cd44d402891131b57
		<!-- Navigacija -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand" href="#">SpaceX Raketų Sistema</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="index.php">Pagrindinis</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="raketoskurimas.php">Raketos modeliavimas</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="userOrders.php">Jūsų užsakymai</a>
				</li>
				</ul>

				<ul class="navbar-nav mr-right-0">
					<li class="nav-item">
						<button class="button1" id="change-backgroundColor">Color</button>
					</li>
					<li class="nav-item">
						<a><button class="button1" id="change-color">Font</button></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="login.php">Prisijungti</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="registration.php">Registruotis</a>
					</li>
					<li class="nav-item">
						<a class="nav-link disabled" href="#">Atsijungti</a>
					</li>
				</ul>
			</div>
		</nav>
		<br>

<script>
var options = {
    valueElement: "valueInput",        
    styleElement:'rect',
    width: 300,
    height: 120,
    sliderSize: 20,
    position: 'top',
    insetColor: '#CCC',
    backgroundColor: '#202020'
};

var pickers = {};
function update () {
    document.getElementById('rect').style.backgroundColor = pickers.changeBackgroundColor.toHEXString();
    document.getElementById('rect').style.color=pickers.changecolor.toHEXString();
}

pickers.changecolor = new jscolor('change-color', options);
pickers.changecolor.onFineChange = update;
pickers.changecolor.fromString('000');          
pickers.changeBackgroundColor = new jscolor('change-backgroundColor',options);
pickers.changeBackgroundColor.onFineChange = update;

update('change-color');
</script>