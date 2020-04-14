<?php
	require "header.php";
?>

<main>
  <div class="wrapper-main">
    <section class="section-default">
    <h1>Ajanvaraussivu</h1>
    <form action="" method="post"> <!-- Ajanvaraus-skriptin osoite -->
      Oma etunimi <input type="text" name="etunimi" placeholder="Varaajan etunimi"><br />
      Oma sukunimi <input type="text" name="sukunimi" placeholder="Varaajan sukunimi"><br />
			Puhelinnumero <input type="text" name="puhelinnumero" placeholder="Puhelinnumerosi"><br />
      Sähköposti <input type="text" name="sahkoposti" placeholder="Sähköpostisi"><br />
			Terapeutin etunimi <input type="text" name="terapeutti_etunimi" placeholder="Terapeutin etunimi"><br />
			Terapeutin sukunimi <input type="text" name="terapeutti_sukunimi" placeholder="Terapeutin sukunimi"><br />
      Haluttu palvelu
				<select name = "palvelu">
					<option value ="P"> Valitse palvelu...</option>
				</select></br>
			<html lang="en">
			<head>
			  <meta charset="utf-8">
			  <meta name="viewport" content="width=device-width, initial-scale=1">
			  <title>jQuery UI Datepicker - Default functionality</title>
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
					<option value ="T"> 0:00</option>
					<option value ="T"> 01:00</option>
					<option value ="T"> 02:00</option>
					<option value ="T"> 03:00</option>
					<option value ="T"> 04:00</option>
					<option value ="T"> 05:00</option>
					<option value ="T"> 06:00</option>
					<option value ="T"> 07:00</option>
					<option value ="T"> 08:00</option>
					<option value ="T"> 09:00</option>
					<option value ="T"> 10:00</option>
					<option value ="T"> 11:00</option>
					<option value ="T"> 12:00</option>
					<option value ="T"> 13:00</option>
					<option value ="T"> 14:00</option>
					<option value ="T"> 15:00</option>
					<option value ="T"> 16:00</option>
					<option value ="T"> 17:00</option>
					<option value ="T"> 18:00</option>
					<option value ="T"> 19:00</option>
					<option value ="T"> 20:00</option>
					<option value ="T"> 21:00</option>
					<option value ="T"> 22:00</option>
					<option value ="T"> 23:00</option>
				</select><br/>
				Lopetusaika
					<select name = "lopetusaika">
						<option value ="T2"> Valitse aika...</option>
						<option value ="T2"> 0:00</option>
						<option value ="T2"> 01:00</option>
						<option value ="T2"> 02:00</option>
						<option value ="T2"> 03:00</option>
						<option value ="T2"> 04:00</option>
						<option value ="T2"> 05:00</option>
						<option value ="T2"> 06:00</option>
						<option value ="T2"> 07:00</option>
						<option value ="T2"> 08:00</option>
						<option value ="T2"> 09:00</option>
						<option value ="T2"> 10:00</option>
						<option value ="T2"> 11:00</option>
						<option value ="T2"> 12:00</option>
						<option value ="T2"> 13:00</option>
						<option value ="T2"> 14:00</option>
						<option value ="T2"> 15:00</option>
						<option value ="T2"> 16:00</option>
						<option value ="T2"> 17:00</option>
						<option value ="T2"> 18:00</option>
						<option value ="T2"> 19:00</option>
						<option value ="T2"> 20:00</option>
						<option value ="T2"> 21:00</option>
						<option value ="T2"> 22:00</option>
						<option value ="T2"> 23:00</option>
					</select></br>
      <button type="submit" name="varaa-laheta">Lähetä Varaus</button><br />
    </form>

  </div>

</main>
