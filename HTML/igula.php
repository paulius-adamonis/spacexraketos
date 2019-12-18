<?php
	require_once("includes/header.php");
?>
		<!-- Puslapis -->
		<div class="container">
			<div class="row">
				<div class="col">
					<h3>Įgulos pasirinkimas</h3>
				</div>
				<div class="col text-right">
					<a class="btn btn-primary" href="interiorModules.php">Grįžti į raketos vidaus modeliavimą</a>
					<a class="btn btn-success" href="location.php">Sudaryti maršrutą</a>
				</div>
			</div>
			<hr>
			<div class="d-flex justify-content-center align-items-center" style="min-height: 400px;">
				<div class="row w-100">
					<div class="col">
						<div class="card">
							<div class="card-title text-center">Narys nr.1</div>
							<div class="card-body">nario foto</div>
							<input type="checkbox" name="igula_1_narys_1" style="margin: auto;"/>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<div class="card-title text-center ">Narys nr.2</div>
							<div class="card-body">nario foto</div>
							<input type="checkbox" name="igula_1_narys_2" style="margin: auto;"/>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<div class="card-title text-center">Narys nr.3</div>
							<div class="card-body">nario foto</div>
							<input type="checkbox" name="igula_1_narys_3" style="margin: auto;"/>
						</div>
					</div>
					<div class="col">
						<div class="card">
							<div class="card-title text-center">Narys nr.4</div>
							<div class="card-body">nario foto</div>
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
