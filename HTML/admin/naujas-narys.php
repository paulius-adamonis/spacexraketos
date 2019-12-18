<?php
	require_once("includes/header.php");
?>
		<!-- Puslapis -->
		<div class="container">
			<div class="h3">Naujo įgulos nario pridėjimas</div>
			<hr>
			<div class="form-group">
                <label for="Vardas">Vardas</label>
                <input type="text" class="form-control" id="Vardas" placeholder="Įveskite vardą">
            </div>
            <div class="form-group">
                <label for="Pavardė">Pavardė</label>
                <input type="text" class="form-control" id="Pavardė" placeholder="Įveskite pavardė">
            </div>
            <div class="form-group">
                <label for="Nuotrauka">Nuotrauka</label>
                <input type="file" class="form-control" id="Nuotrauka">
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Pridėti naują narį!
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
                            Narys pridėtas!
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
