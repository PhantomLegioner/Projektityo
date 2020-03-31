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
				<option value="helsinki">Helsinki</option>
				<option value="kuopio">Kuopio</option>
				<option value="tampere">Tampere</option>
			</select> <br>

			<label for="cb_diabetes">Diabetes</label>
			<input type="checkbox" id="cb_diabetes" name="cb_diabetes" value="Diabetes"><br>

			<label for="cb_keliakia">Keliakia</label>
			<input type="checkbox" id="cb_keliakia" name="cb_keliakia" value="Keliakia"><br>

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
