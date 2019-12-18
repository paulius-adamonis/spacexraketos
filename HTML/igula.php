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
					<a class="btn btn-primary" href="raketoskurimas.html">Grįžti į raketos modeliavimą</a>
					<div class="btn btn-success">Sudaryti maršrutą</div>
				</div>
			</div>
			<hr>
			<div class="h-50 d-flex justify-content-center align-items-center">
				<div class="row w-100">
					<div class="col-1">
						<a class="carousel-control-prev w-100" href="#carousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
					</div>
					<div class="col">
						<div id="carousel" class="carousel slide h-100" data-ride="carousel" data-interval="false">
							<div class="carousel-inner h-100">
								<div class="carousel-item w-100 h-100 active">
									<div class="d-flex justify-content-center">
										<div class="container-fluid h-100 overflow-auto">
											<div class="row">
												<h4 class="text-center w-100 m-0">Pirma įgula</h4>
											</div>
											<hr>
											<div class="row">
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
								</div>
								<div class="carousel-item w-100 h-100 ">
									<div class="d-flex justify-content-center align-items-center h-100">
										<div class="container-fluid h-100 overflow-auto">
											<div class="row">
												<h4 class="text-center w-100 m-0">Antra įgula</h4>
											</div>
											<hr>
											<div class="row">
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Narys nr.1</div>
														<div class="card-body">nario foto</div>
                                                        <input type="checkbox" name="igula_2_narys_1" style="margin: auto;"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center ">Narys nr.2</div>
														<div class="card-body">nario foto</div>
                                                        <input type="checkbox" name="igula_2_narys_2" style="margin: auto;"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Narys nr.3</div>
														<div class="card-body">nario foto</div>
                                                        <input type="checkbox" name="igula_2_narys_3" style="margin: auto;"/>
                                                    </div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item w-100 h-100">
									<div class="d-flex justify-content-center align-items-center h-100">
										<div class="container-fluid h-100 overflow-auto">
											<div class="row">
												<h4 class="text-center w-100 m-0">Trecia įgula</h4>
											</div>
											<hr>
											<div class="row">
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Narys nr.1</div>
														<div class="card-body">nario foto</div>
                                                        <input type="checkbox" name="igula_3_narys_1" style="margin: auto;"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center ">Narys nr.2</div>
														<div class="card-body">nario foto</div>
                                                        <input type="checkbox" name="igula_3_narys_2" style="margin: auto;"/>
													</div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Narys nr.3</div>
														<div class="card-body">nario foto</div>
                                                        <input type="checkbox" name="igula_3_narys_3" style="margin: auto;"/>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-1">
						<a class="carousel-control-next w-100" href="#carousel" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
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
