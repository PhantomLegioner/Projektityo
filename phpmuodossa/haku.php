<?php
	require "header.php";
?>
<main>
<div class="container-fluid">
	<div class="row">
    <div class="col-sm-6" style="background-color:#C1727B;">
		<form id="hakuform" action="haku_action.php" method="GET">
			<label for="nimi">Nimi:</label>
			<input type="text" id="nimi" name="nimi"><br>

			<select id="paikkakunta" name="paikkakunta" class="custom-select mb-3">
				<option selected>Paikkakunta</option>
				<option value="Helsinki">Helsinki</option>
				<option value="Kuopio">Kuopio</option>
				<option value="Tampere">Tampere</option>
			</select> <br>
			
			<input type="checkbox" name="cbox[]" id="cbox" value="Diabetes">Diabetes<br>

			<input type="checkbox" name="cbox[]" id="cbox" value="Keliakia">Keliakia<br>
			
			<input type="submit" value="Hae">
		</form>
	</div>
	</div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
</div>
</main>
<?php
	require "footer.php";
?>
