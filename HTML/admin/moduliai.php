<?php
	require_once("includes/header.php");
?>
		<!-- Puslapis -->
		<div class="container">
            <div class="row">
				<div class="col">
					<h3>Raketos modulių sąrašas</h3>
				</div>
				<div class="col text-right">
					<a class="btn btn-primary" href="#">Pridėti naują modulį</a>
				</div>
			</div>
			<hr>
			<table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pavadinimas</th>
                        <th scope="col">Aprašymas</th>
                        <th scope="col">Tipas</th>
                        <th scope="col">Šalinti</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="1">
                        <td>1</td>
                        <td>Dyzelinis variklis</td>
                        <td>Naudojamas, norint raketą paleisti dyzelinu</td>
                        <td>
                            <div class="form-group">
                                <select class="form-control" id="tipas1">
                                    <option selected>Išorės</option>
                                    <option>Vidaus</option>
                                </select>
                            </div>
                        </td>
                        <td><button type="button" class="btn btn-danger" onclick="removeElement(1)">Šalinti</button></td>
                    </tr>
                    <tr id="2">
                        <td>2</td>
                        <td>Ratukas</td>
                        <td>Naudojamas nuleidžiant raketą ar transportuojant</td>
                        <td>
                            <div class="form-group">
                                <select class="form-control" id="tipas2">
                                    <option selected>Išorės</option>
                                    <option>Vidaus</option>
                                </select>
                            </div>
                        </td>
                        <td><button type="button" class="btn btn-danger" onclick="removeElement(1)">Šalinti</button></td>
                    </tr>
                    <tr id="3">
                        <td>3</td>
                        <td>Dyzelino bakas</td>
                        <td>Privalomas, kai naudojamas dyzelinis variklis</td>
                        <td>
                            <div class="form-group">
                                <select class="form-control" id="tipas3">
                                    <option selected>Išorės</option>
                                    <option>Vidaus</option>
                                </select>
                            </div>
                        </td>
                        <td><button type="button" class="btn btn-danger" onclick="removeElement(3)">Šalinti</button></td>
                    </tr>
                    <tr id="4">
                        <td>4</td>
                        <td>Lova</td>
                        <td>Naudojama, kai pabosta kelionė</td>
                        <td>
                            <div class="form-group">
                                <select class="form-control" id="tipas4">
                                    <option>Išorės</option>
                                    <option selected>Vidaus</option>
                                </select>
                            </div>
                        </td>
                        <td><button type="button" class="btn btn-danger" onclick="removeElement(1)">Šalinti</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
<script>
    function removeElement(id) {
    var elem = document.getElementById(id);
    return elem.parentNode.removeChild(elem);
}
</script>
<?php
	require_once("includes/footer.php");
?>
