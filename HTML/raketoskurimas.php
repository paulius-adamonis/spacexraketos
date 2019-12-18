<?php
	require_once("includes/header.php");
?>
		<!-- Puslapis -->
		<div class="container">
			<div class="row">
				<div class="col">
					<h3>Raketos modeliavimas</h3>
				</div>
				<div class="col text-right">
					<div class="btn btn-primary">Generuoti naują raketą</div>
					<a class="btn btn-success" href="igula.php">Rinktis įgulą</a>
				</div>
			</div>
			<hr>
			<div class="w-100 h-50 bg-secondary d-flex justify-content-center align-items-center text-light">Raketos vaizdas</div>
			<hr>
			<div class="d-flex justify-content-center" style="height: 33%;">
				<div class="row w-100 h-100">
					<div class="col-1 h-100">
						<a class="carousel-control-prev w-100" href="#carousel" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
					</div>
					<div class="col h-100">
						<div id="carousel" class="carousel slide h-100" data-ride="carousel" data-interval="false">
							<div class="carousel-inner h-100">
								<div class="carousel-item w-100 h-100 active">
									<div class="d-flex justify-content-center align-items-center h-100">
										<div class="container-fluid h-100 overflow-auto">
											<div class="row">
												<h4 class="text-center w-100 m-0">Pirmo pogrupio moduliai</h4>
											</div>
											<hr>
											<div class="row">
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Modulis nr.1</div>
														<div class="card-body">modulio img</div>
														<input type="radio" name="pirmas_modulis" value="1" style="margin: auto;" checked="checked"/>
													</div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center ">Modulis nr.2</div>
														<div class="card-body">modulio img</div>
                                                        <input type="radio" name="pirmas_modulis" value="2" style="margin: auto;"/>
													</div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Modulis nr.3</div>
														<div class="card-body">modulio img</div>
                                                        <input type="radio" name="pirmas_modulis" value="3" style="margin: auto;"/>
													</div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Modulis nr.4</div>
														<div class="card-body">modulio img</div>
                                                        <input type="radio" name="pirmas_modulis" value="4" style="margin: auto;"/>
													</div>
												</div>
											</div>
											<br>
											<div class="row">
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Modulis nr.1</div>
														<div class="card-body">modulio img</div>
                                                        <input type="radio" name="pirmas_modulis" value="5" style="margin: auto;"/>
													</div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center ">Modulis nr.2</div>
														<div class="card-body">modulio img</div>
                                                        <input type="radio" name="pirmas_modulis" value="6" style="margin: auto;"/>
													</div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Modulis nr.3</div>
														<div class="card-body">modulio img</div>
                                                        <input type="radio" name="pirmas_modulis" value="7" style="margin: auto;"/>
													</div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Modulis nr.4</div>
														<div class="card-body">modulio img</div>
                                                        <input type="radio" name="pirmas_modulis" value="8" style="margin: auto;"/>
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
												<h4 class="text-center w-100 m-0">Antro pogrupio moduliai</h4>
											</div>
											<hr>
											<div class="row">
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Modulis nr.1</div>
														<div class="card-body">modulio img</div>
                                                        <input type="radio" name="antras_modulis" value="1" style="margin: auto;" checked="checked"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center ">Modulis nr.2</div>
														<div class="card-body">modulio img</div>
                                                        <input type="radio" name="antras_modulis" value="2" style="margin: auto;"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Modulis nr.3</div>
														<div class="card-body">modulio img</div>
                                                        <input type="radio" name="antras_modulis" value="3" style="margin: auto;"/>
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
												<h4 class="text-center w-100 m-0">Trecio pogrupio moduliai</h4>
											</div>
											<hr>
											<div class="row">
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Modulis nr.1</div>
														<div class="card-body">modulio img</div>
                                                        <input type="radio" name="trecias_modulis" value="1" style="margin: auto;" checked="checked"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center ">Modulis nr.2</div>
														<div class="card-body">modulio img</div>
                                                        <input type="radio" name="trecias_modulis" value="2" style="margin: auto;"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Modulis nr.3</div>
														<div class="card-body">modulio img</div>
                                                        <input type="radio" name="trecias_modulis" value="3" style="margin: auto;"/>
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

			<hr>

			<div class="d-flex justify-content-center" style="height: 33%;">
				<div class="row w-100 h-100">
					<div class="col-1 h-100">
						<a class="carousel-control-prev w-100" href="#carousel2" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
					</div>
					<div class="col h-100">
						<div id="carousel2" class="carousel slide h-100" data-ride="carousel" data-interval="false">
							<div class="carousel-inner h-100">
								<div class="carousel-item w-100 h-100 active">
									<div class="d-flex justify-content-center align-items-center h-100">
										<div class="container-fluid h-100 overflow-auto">
											<div class="row">
												<h4 class="text-center w-100 m-0">Pirmo pogrupio dizainai</h4>
											</div>
											<hr>
											<div class="row">
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Dizainas nr.1</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="pirmas_dizainas" value="1" style="margin: auto;" checked="checked"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center ">Dizainas nr.2</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="pirmas_dizainas" value="2" style="margin: auto;"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Dizainas nr.3</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="pirmas_dizainas" value="3" style="margin: auto;"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Dizainas nr.4</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="pirmas_dizainas" value="4" style="margin: auto;"/>
                                                    </div>
												</div>
											</div>
											<br>
											<div class="row">
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Dizainas nr.1</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="pirmas_dizainas" value="5" style="margin: auto;" checked="checked"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center ">Dizainas nr.2</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="pirmas_dizainas" value="6" style="margin: auto;"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Dizainas nr.3</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="pirmas_dizainas" value="7" style="margin: auto;"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Dizainas nr.4</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="pirmas_dizainas" value="8" style="margin: auto;"/>
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
												<h4 class="text-center w-100 m-0">Antro pogrupio dizainai</h4>
											</div>
											<hr>
											<div class="row">
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Dizainas nr.1</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="antras_dizainas" value="1" style="margin: auto;" checked="checked"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center ">Dizainas nr.2</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="antras_dizainas" value="4" style="margin: auto;"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Dizainas nr.3</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="antras_dizainas" value="3" style="margin: auto;"/>
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
												<h4 class="text-center w-100 m-0">Trecio pogrupio dizainai</h4>
											</div>
											<hr>
											<div class="row">
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Dizainas nr.1</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="trecias_dizainas" value="1" style="margin: auto;" checked="checked"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center ">Dizainas nr.2</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="trecias_dizainas" value="2" style="margin: auto;"/>
                                                    </div>
												</div>
												<div class="col">
													<div class="card">
														<div class="card-title text-center">Dizainas nr.3</div>
														<div class="card-body">dizaino img</div>
                                                        <input type="radio" name="trecias_dizainas" value="3" style="margin: auto;"/>
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
						<a class="carousel-control-next w-100" href="#carousel2" role="button" data-slide="next">
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
            $('#carousel2').carousel();
		</script>		
<?php
	require_once("includes/footer.php");
?>

<script>



</script>