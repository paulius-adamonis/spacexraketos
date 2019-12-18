<?php
	require_once("includes/header.php");
?>
		<!-- Puslapis -->
		<div class="container">
			<div class="h3">Naujo modulio pridėjimas</div>
			<hr>
			<div class="form-group">
                <label for="Vardas">Pavadinimas</label>
                <input type="text" class="form-control" id="Pavadinimas" placeholder="Įveskite modulio pavadinimą">
            </div>
            <div class="form-group">
                <label for="Pavardė">Aprašymas</label>
                <input type="text" class="form-control" id="Aprašymas" placeholder="Įveskite modulio aprašymą">
            </div>
            <div class="form-group">
                <label for="Tipas">Tipas</label>
                <select class="form-control" id="Tipas">
                    <option>Išorės</option>
                    <option>Vidaus</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Modelis">3D modelis</label>
                <input type="file" class="form-control" id="Modelis">
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Pridėti naują modulį!
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Sėkmė!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                            Modulis pridėtas!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-primary" data-dismiss="modal">Gerai</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
	require_once("includes/footer.php");
?>
