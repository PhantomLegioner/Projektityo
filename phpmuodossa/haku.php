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
				<option value="Etayhteys">Etäyhteys</option>
				<option value="Helsinki">Helsinki</option>
				<option value="Kuopio">Kuopio</option>
				<option value="Tampere">Tampere</option>
			</select> <br>
			
			<input type="checkbox" name="cbox[]" id="cbox" value="Ruoanvalinta helpommaksi">Ruoanvalinta helpommaksi<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="Energisempi arki">Energisempi arki<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="Liikkujan ravitsemus">Liikkujan ravitsemus<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="Ahdistava ruoka">Ahdistava ruoka<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="Vegaaniravitsemus">Vegaaniravitsemus<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="Eettisesti ja ekologisesti kestävä ruokavalio">Eettisesti ja ekologisesti kestävä ruokavalio<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="Tyypin 1 Diabetes">Tyypin 1 diabetes<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="Suolistosairaudet  ja vatsaongelmat">Suolistosairaudet ja vatsaongelmat<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="Lapsiperheen ravitsemus">Lapsiperheen ravitsemus<br>
			
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
