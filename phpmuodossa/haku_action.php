<?php

require "includes/dbh.inc.php";

?>

<?php
	require "header.php";
?>
<!doctype html>
<html lang="en">
<main>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<?php

$query = "SELECT * FROM ravitsemusterapeutti r
JOIN henkilonerityisosaaminen h ON h.HENKILO_ID = r.HENKILO_ID
JOIN erityisosaaminen e ON e.ERITYISOSAAMINEN_ID = h.ERITYISOSAAMINEN_ID"; //hakulausekkeen alku
$i = 0; //laskuri
$c = 0; //toinen laskuri

if(isset($_GET['nimi'])){
	$qnimi = $_GET['nimi'];
	if($qnimi != ""){
		if($i==0){
			$query = $query . " WHERE " . "(r.KOKONIMI LIKE '%" . $qnimi . "%')";// OR (rt.SUKUNIMI LIKE '%" . $qnimi . "%')";
			$i++;
		}
		else{
			$query = $query . " AND " . "(r.KOKONIMI LIKE '%" . $qnimi . "%')";// OR (rt.SUKUNIMI LIKE '%" . $qnimi . "%')";
		}
	}
}
if(isset($_GET['paikkakunta'])){
	$qpaikkakunta = $_GET['paikkakunta'];
	if($qpaikkakunta != "Paikkakunta" && $qpaikkakunta != "Etayhteys"){
		if($i==0){
			$query = $query . " WHERE " . "(r.PAIKKAKUNTA='" . $qpaikkakunta . "')";
			$i++;
		}
		else{
			$query = $query . " AND " . "(r.PAIKKAKUNTA='" . $qpaikkakunta . "')";
		}
	}
	if($qpaikkakunta == "Etayhteys"){
		if($i==0){
			$query = $query . " WHERE " . "(r.ETAYHTEYS=1)";
			$i++;
		}
		else{
			$query = $query . " AND " . "(r.ETAYHTEYS=1)";
		}
	}
}
if(isset($_GET['cbox'])){
	$qcbox = $_GET['cbox'];
	foreach($qcbox as $var){
		if($c==0){
			if($i==0){
				$query = $query . " WHERE e.OSAAMISEN_NIMI IN ('" . $var . "'";
				$c++;
				$i++;
				//echo $var;
			}
			else{
				$query = $query . " AND e.OSAAMISEN_NIMI IN ('" . $var . "'";
				$c++;
				//echo $var;
			}
		}
		else{
			$query = $query . ", '" . $var . "'";
			$c++;
		}
	}
	$query = $query . ") GROUP BY r.HENKILO_ID HAVING COUNT(*) = " . $c;
}
else{
	$query = $query . " GROUP BY r.HENKILO_ID";
}

$query = $query . ";"; //hakulausekkeen loppu
/*
$query = htmlspecialchars($query); //muuntaa html merkit sopiviksi

$query = mysqli_real_escape_string($conn, $query); //estää sql-injektion
*/
$rawresults = mysqli_query($conn, $query);

if(mysqli_num_rows($rawresults) > 0){ //jos tuloksia on
	while($results = mysqli_fetch_array($rawresults)){ //looppaa kun tietojen siirto tauluun onnistuu
		echo $results['KOKONIMI']/*." ".$results['SUKUNIMI']*/."<br>".$results['KOULUTUS']."<br>".$results['PAIKKAKUNTA'];

		if ($results['ETAYHTEYS'] == 1){
			echo ", etäyhteys";
		}

		echo "<br>"."Kuvaus: ".$results['KUVAUS']."<br>"."Sähköposti: ".$results['EMAIL'].
		"<br>"."Puhelinnumero: ".$results['PUHELINNRO']."<br>";

			//koko seuraava osio on ainoastaan olemassa sitä varten että saadaan erityisosaamiset esille

			$equery = "SELECT e.OSAAMISEN_NIMI FROM ravitsemusterapeutti r
			JOIN henkilonerityisosaaminen h ON h.HENKILO_ID = r.HENKILO_ID
			JOIN erityisosaaminen e ON e.ERITYISOSAAMINEN_ID = h.ERITYISOSAAMINEN_ID
			WHERE r.HENKILO_ID='" . $results['HENKILO_ID'] . "';";

			$erawresults = mysqli_query($conn, $equery);

			$e = 0; //kolmas laskuri

			while($eresults = mysqli_fetch_array($erawresults)){
				if($eresults['OSAAMISEN_NIMI'] != "Ruoanvalinta helpommaksi" AND
				$eresults['OSAAMISEN_NIMI'] != "Energisempi arki"){
					if($e==0){
						echo "Erityisosaaminen: ".$eresults['OSAAMISEN_NIMI'];
						$e++;
					}
					else{
						echo ", ".$eresults['OSAAMISEN_NIMI'];
					}
				}
			}

			echo "<br><br>";
	}
}
else{ //jos tuloksia ei ole
	echo "Hakuehtoja vastaavia ravitsemusterapeutteja ei löytynyt.";
}

?>

<button type="button" class="btn" style="background-color:#C1727B"><a href="haku.php">UUSI HAKU</button><br><br>

</main>
</html>

<?php
	require "footer.php";
?>
