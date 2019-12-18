<?php
	require_once("includes/header.php");
?>
		<!-- Puslapis -->
		<div class="container">
			<div class="h3">Raketos <?=$_GET['name']?> paleidimo stebėjimas</div>
			<hr>
			<p>Paspauskite ant žemiau esančio grotuvo norint pradėti tiesioginės transliacijos stebėjimą</p>
			<div class="embed-responsive embed-responsive-16by9">
				<video src="resources/launch.mp4" controls></video>
			</div>
		</div>

<?php
	require_once("includes/footer.php");
?>