<?php
require_once("includes/header.php");
?>
<head>
    <link rel="stylesheet" type="text/css" href="includes/style.css">
</head>
    <!-- Puslapis -->
    <div class="container">
        <div class="row">
            <div class="col">
                <h3>Raketos modeliavimas</h3>
            </div>
            <div class="col text-right">
                <div class="btn btn-primary">Generuoti naują raketą</div>
                <a class="btn btn-success" href="interiorModules.php">Rinktis vidaus modulius</a>
            </div>
        </div>
        <hr>

		<div class="d-flex justify-content-center">
	        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner">
			    <div class="carousel-item active">
			      <img class="d-block w-100 h-100" id="image1" src="raketuFoto/Sviesi/Default/1.png" alt="Šiaurės kampas">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100 h-100" id="image2" src="raketuFoto/Sviesi/Default/2.png" alt="Rytų kampas">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100 h-100" id="image3" src="raketuFoto/Sviesi/Default/3.png" alt="Pietų kampas">
			    </div>
			    <div class="carousel-item">
			      <img class="d-block w-100 h-100" id="image4" src="raketuFoto/Sviesi/Default/4.png" alt="Vakarų kampas">
			    </div>
			  </div>
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Atgal</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only">Sekantis</span>
			  </a>
			</div>
		</div>

        <hr>
        <div class="row">
            <div class="col">
            <h4 class="text-center">Raketos dizainas</h4>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="designRadio" id="inlineRadio1" value="option1" checked onclick="func();">
                    <label class="form-check-label" for="inlineRadio1">Šviesi</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="designRadio" id="inlineRadio2" value="option2" onclick="func();">
                    <label class="form-check-label" for="inlineRadio2">Tamsi</label>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col">
            <h4 class="text-center">Kuro tipai</h4>
            </div>
        </div>
        <div class="row">
            <div class="col d-flex justify-content-center">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fuelRadio" id="inlineRadio1" value="option1" checked>
                    <label class="form-check-label" for="inlineRadio1">Kerasinas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fuelRadio" id="inlineRadio2" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Dyzelinas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fuelRadio" id="inlineRadio3" value="option3">
                    <label class="form-check-label" for="inlineRadio3">Benzinas</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="fuelRadio" id="inlineRadio4" value="option4">
                    <label class="form-check-label" for="inlineRadio4">Aliejus</label>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-center">
        	<div class="row w-100 mb-3">
                <div class="col">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="container-fluid overflow-auto">
                            <div class="row">
                                <h4 class="text-center w-100 m-0">Modulių pasirinkimas</h4>
                            </div><br>
                            <div class="row">
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
									  <div class="card-body">
									    <p class="card-text d-flex justify-content-center align-items-center">Stabilizatoriai</p>
									  	<img src="moduliuFoto/Stabilizer.png" class="card-img-top mb-3" alt="Papildomi varikliai"/>
									  	<input class="d-flex justify-content-center align-items-center" type="checkbox" name="moduliai" onclick="func();" style="margin: auto;"/>
									  </div>
									</div>
                                </div>
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
									  <div class="card-body">
									    <p class="card-text d-flex justify-content-center align-items-center">Aerodinaminiai "pelekai"</p>
									  	<img src="moduliuFoto/Fins.png" class="card-img-top mb-3" alt="Papildomi varikliai"/>
									  	<input class="d-flex justify-content-center align-items-center" type="checkbox" name="moduliai" onclick="func();" style="margin: auto;"/>
									  </div>
									</div>
                                </div>
                                <div class="col">
                                    <div class="card" style="width: 18rem;">
									  <div class="card-body">
									    <p class="card-text d-flex justify-content-center align-items-center">Papildomi varikliai</p>
									  	<img src="moduliuFoto/Thruster.png" class="card-img-top mb-3" alt="Papildomi varikliai"/>
									  	<input class="d-flex justify-content-center align-items-center" type="checkbox" name="moduliai" onclick="func();" style="margin: auto;"/>
									  </div>
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <script>
    	 function func()
             {
                 var designRadio = document.getElementsByName('designRadio');
                 var color = "Sviesi";
                 
                 if(designRadio[1].checked)
                 {
                     color = "Tamsi";
                 }
                 else
                 {
                     color = "Sviesi";
                 }

                 var path = "raketuFoto/" + color;
                 
             	 var moduliuChb = document.getElementsByName('moduliai');
             	 var moduliai = "";
                 if(moduliuChb[1].checked)
                 {
                 	moduliai = moduliai + "Fins";
                 }
                 if(moduliuChb[0].checked)
                 {
                     moduliai = moduliai + "Stabilizators";
                 }
                 
                 if(moduliuChb[2].checked)
                 {
                 	moduliai = moduliai + "Thrusters";
                 }
                 if(moduliai == "") 
                 {
                 	moduliai = "Default"
                 }

                 document.getElementById('image1').src=path + "/" + moduliai + "/1.png";
                 document.getElementById('image2').src=path + "/" + moduliai + "/2.png";
                 document.getElementById('image3').src=path + "/" + moduliai + "/3.png";
                 document.getElementById('image4').src=path + "/" + moduliai + "/4.png";
                 console.log(path);
                 
             }
    </script>
    <script>
        $('#carousel').carousel();
        $('#carousel2').carousel();
        $('#carousel3').carousel();
    </script>
<?php
require_once("includes/footer.php");
?>

<style>
    .carousel-control-next, .carousel-control-prev {
        border: solid 1px black;
    }
</style>
