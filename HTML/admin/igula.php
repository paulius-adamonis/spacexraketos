<?php
	require_once("includes/header.php");
?>
		<!-- Puslapis -->
		<div class="container">
            <div class="row">
				<div class="col">
					<h3>Įgulos narių sąrašas</h3>
				</div>
				<div class="col text-right">
					<a class="btn btn-primary" href="naujas-narys.php">Pridėti naują narį</a>
				</div>
			</div>
			<hr>
			<table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Vardas</th>
                        <th scope="col">Pavardė</th>
                        <th scope="col">Šalinti</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="1">
                        <td>1</td>
                        <td>Tomas</td>
                        <td>Speisas</td>
                        <td><button type="button" class="btn btn-danger" onclick="removeElement(1)">Šalinti</button></td>
                    </tr>
                    <tr id="2">
                        <td>2</td>
                        <td>Artūras</td>
                        <td>Marsietis</td>
                        <td><button type="button" class="btn btn-danger" onclick="removeElement(2)">Šalinti</button></td>
                    </tr>
                    <tr id="3">
                        <td>3</td>
                        <td>Kristupas</td>
                        <td>Žvaigždenis</td>
                        <td><button type="button" class="btn btn-danger" onclick="removeElement(3)">Šalinti</button></td>
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
