<?php
	require "header.php";
?>
<!doctype html>
<html lang="en">
<main>
  <div class="wrapper-main">
    <section class="section-default">
    <h1>Ajanvaraussivu</h1>
    <form action="includes/reservetime.inc.php" method="post"> <!-- Ajanvaraus-skriptin osoite -->
      Oma etunimi <input type="text" name="etunimi" placeholder="Varaajan etunimi"><br />
      Oma sukunimi <input type="text" name="sukunimi" placeholder="Varaajan sukunimi"><br />
			Puhelinnumero <input type="text" name="puhelinnumero" placeholder="Puhelinnumerosi"><br />
      Sähköposti <input type="text" name="sahkoposti" placeholder="Sähköpostisi"><br />
			Terapeutin etunimi <input type="text" name="terapeutti_etunimi" placeholder="Terapeutin etunimi"><br />
			Terapeutin sukunimi <input type="text" name="terapeutti_sukunimi" placeholder="Terapeutin sukunimi"><br />
      Haluttu palvelu
				<select name = "palvelu">
					<option value ="P"> Valitse palvelu...</option>
					<option value ="palvelu1"> palvelu1</option>
				</select></br>
			<html lang="en">
			<head>
			  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <title>Ajanvaraus</title>
			  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
			  <link rel="stylesheet" href="/resources/demos/style.css">
			  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
			  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
			  <script>
			  $( function() {
			    $( "#datepicker" ).datepicker();
			  } );
			  </script>
			</head>
			<body>
			Tapaamisen päivämäärä <input type="text" name="paivamaara" placeholder="Päivämäärä" id="datepicker"><br/> <!-- Päivävalinta valinnan lähdeosoite: https://jqueryui.com/datepicker/ -->
			</body>
			</html>
				Aloitusaika
				<select name = "aloitusaika">
					<option value =""> Valitse aika...</option>
					<option value ="0:00"> 0:00</option>
					<option value ="01:00"> 01:00</option>
					<option value ="02:00"> 02:00</option>
					<option value ="03:00"> 03:00</option>
					<option value ="04:00"> 04:00</option>
					<option value ="05:00"> 05:00</option>
					<option value ="06:00"> 06:00</option>
					<option value ="07:00"> 07:00</option>
					<option value ="08:00"> 08:00</option>
					<option value ="09:00"> 09:00</option>
					<option value ="10:00"> 10:00</option>
					<option value ="11:00"> 11:00</option>
					<option value ="12:00"> 12:00</option>
					<option value ="13:00"> 13:00</option>
					<option value ="14:00"> 14:00</option>
					<option value ="15:00"> 15:00</option>
					<option value ="16:00"> 16:00</option>
					<option value ="17:00"> 17:00</option>
					<option value ="18:00"> 18:00</option>
					<option value ="19:00"> 19:00</option>
					<option value ="20:00"> 20:00</option>
					<option value ="21:00"> 21:00</option>
					<option value ="22:00"> 22:00</option>
					<option value ="23:00"> 23:00</option>
				</select><br/>
				Lopetusaika
					<select name = "lopetusaika">
						<option value =""> Valitse aika...</option>
						<option value ="0:00"> 0:00</option>
						<option value ="01:00"> 01:00</option>
						<option value ="02:00"> 02:00</option>
						<option value ="03:00"> 03:00</option>
						<option value ="04:00"> 04:00</option>
						<option value ="05:00"> 05:00</option>
						<option value ="06:00"> 06:00</option>
						<option value ="07:00"> 07:00</option>
						<option value ="08:00"> 08:00</option>
						<option value ="09:00"> 09:00</option>
						<option value ="10:00"> 10:00</option>
						<option value ="11:00"> 11:00</option>
						<option value ="12:00"> 12:00</option>
						<option value ="13:00"> 13:00</option>
						<option value ="14:00"> 14:00</option>
						<option value ="15:00"> 15:00</option>
						<option value ="16:00"> 16:00</option>
						<option value ="17:00"> 17:00</option>
						<option value ="18:00"> 18:00</option>
						<option value ="19:00"> 19:00</option>
						<option value ="20:00"> 20:00</option>
						<option value ="21:00"> 21:00</option>
						<option value ="22:00"> 22:00</option>
						<option value ="23:00"> 23:00</option>
					</select></br>
      <button type="submit" name="varaa-laheta">Lähetä Varaus</button><br />
    </form>

  </div>
</main>
</html>

<?php
	require "footer.php";
?>
