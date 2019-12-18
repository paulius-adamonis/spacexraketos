<?php
	require_once("includes/header.php");
?>
		<!-- Puslapis -->
		<div class="container">
			<div class="h3">Užsakymų sąrašas</div>
			<hr>
			<table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Raketa</th>
                        <th scope="col">Data</th>
                        <th scope="col">Būsena</th>
                        <th scope="col">Šalinti</th>
                    </tr>
                </thead>
                <tbody>
                    <tr id="1">
                        <td>1</td>
                        <td><img src="resources/rocket.jpeg" style="height: 80px;"/></td>
                        <td>2019-12-01</td>
                        <td>
                            <div class="form-group">
                                <select class="form-control" id="busena1">
                                    <option selected>Įvykdytas</option>
                                    <option>Vykdomas</option>
                                    <option>Patvirtintas</option>
                                    <option>Laukiama patvirtinimo</option>
                                </select>
                            </div>
                        </td>
                        <td><button type="button" class="btn btn-danger" onclick="removeElement(1)">Šalinti</button></td>
                    </tr>
                    <tr id="2">
                        <td>2</td>
                        <td><img src="resources/rocket.jpeg" style="height: 80px;"/></td>
                        <td>2019-12-12</td>
                        <td>
                            <div class="form-group">
                                <select class="form-control" id="busena2">
                                    <option selected>Įvykdytas</option>
                                    <option>Vykdomas</option>
                                    <option>Patvirtintas</option>
                                    <option>Laukiama patvirtinimo</option>
                                </select>
                            </div>
                        </td>
                        <td><button type="button" class="btn btn-danger" onclick="removeElement(2)">Šalinti</button></td>
                    </tr>
                    <tr id="3">
                        <td>3</td>
                        <td><img src="resources/rocket.jpeg" style="height: 80px;"/></td>
                        <td>2020-02-05</td>
                        <td>
                            <div class="form-group">
                                <select class="form-control" id="busena3">
                                    <option>Įvykdytas</option>
                                    <option>Vykdomas</option>
                                    <option selected>Patvirtintas</option>
                                    <option>Laukiama patvirtinimo</option>
                                </select>
                            </div>
                        </td>
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
