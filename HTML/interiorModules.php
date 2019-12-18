<?php
	require_once("includes/header.php");
?>
		<!-- Puslapis -->
	<div class="container">
        <div class="h3">Vidaus moduliai</div>
        <div class="row">
            <div class="col">
                <h3>Raketos modeliavimas</h3>
            </div>
            <div class="col text-right">
                <a class="btn btn-primary" href="raketoskurimas.php">Grįžti į raketos modeliavimą</a>
                <a class="btn btn-success" href="igula.php">Rinktis įgulą</a>
            </div>
        </div>
		<hr>
		<p>Pasirinkite norimą modulį iš sąrašo ir spauskite "Pridėti modulį", jis bus pridedamas į užsakymą</p>
    <form>
        <div class="form-group">
        	<select class="form-control" id="module">
        		<option>Sapnų modulis</option>
        		<option>Šaldytuvas</option>
        		<option>Intergalaktinis interneto ryšys</option>
        		<option>Robotas-dulkių siurblys</option>
        		<option>Žaidimų modulis</option>
        		<option>Kino modulis</option>
        	</select>
        </div>
        <input type="button" class="add-row btn btn-success" value="Pridėti modulį">
    </form>

    <table class="table">
        <thead>
            <tr>
                <th>Pasirinkti</th>
                <th>Modulis</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <button type="button" class="delete-row btn btn-danger">Ištrinti modulį</button>
	</div>
	<script>
    $(document).ready(function(){
        $(".add-row").click(function(){
            var module = $("#module").val();
            var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + module + "</td></tr>";
            $("table tbody").append(markup);
        });

        // Find and remove selected table rows
        $(".delete-row").click(function(){
            $("table tbody").find('input[name="record"]').each(function(){
                if($(this).is(":checked")){
                    $(this).parents("tr").remove();
                }
            });
        });
    });    
</script>
<?php
	require_once("includes/footer.php");
?>