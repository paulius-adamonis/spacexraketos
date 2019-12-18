<?php
	require_once("includes/header.php");
?>
		<!-- Puslapis -->
		<div class="container">
			<div class="row">
				<div class="col">
					<h3>Maršruto pasirinkimas</h3>
				</div>
				<div class="col text-right">
                <a class="btn btn-primary" href="igula.php">Grįžti į įgulos pasirinkimą</a>
					<a class="btn btn-success" href="location.php">Pasirinkti pakilimo vietą</a>
				</div>
			</div>
			<hr>
			<div class="d-flex justify-content-center align-items-center" style="min-height: 400px;">
				<div class="row w-100">
					<div class="col">
						<div class="card">
							<div class="card-title text-center">Stotelė nr.1</div>
							<div class="card-body">stotelės aprašymas</div>
							<input type="checkbox" name="igula_1_narys_1" style="margin: auto;"/>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<div class="card-title text-center ">Stotelė nr.2</div>
							<div class="card-body">stotelės aprašymas</div>
							<input type="checkbox" name="igula_1_narys_2" style="margin: auto;"/>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<div class="card-title text-center">Stotelė nr.3</div>
							<div class="card-body">stotelės aprašymas</div>
							<input type="checkbox" name="igula_1_narys_3" style="margin: auto;"/>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<div class="card-title text-center">Stotelė nr.4</div>
							<div class="card-body">stotelės aprašymas</div>
							<input type="checkbox" name="igula_1_narys_4" style="margin: auto;"/>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>		
		<script>
			$('#carousel').carousel();
		</script>
<?php
	require_once("includes/footer.php");
?>

<style>
    .carousel-control-next, .carousel-control-prev {
        border: solid 1px black;
    }
</style>
