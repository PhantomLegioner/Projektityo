<?php

require "includes/dbh.inc.php";

?>

<?php
	require "header.php";
?>

<main>

<button type="button" class="btn" style="background-color:#C1727B"><a href="haku.php">UUSI HAKU</button><br><br>

<?php

$query = "SELECT * FROM ravitsemusterapeutti AS rt
INNER JOIN henkilonerityisosaaminen AS he ON he.HENKILO_ID = rt.HENKILO_ID
INNER JOIN erityisosaaminen AS eo ON eo.ERITYISOSAAMINEN_ID = he.ERITYISOSAAMINEN_ID"; //hakulausekkeen alku
$i = 0; //laskuri

if(isset($_GET['nimi'])){
	$qnimi = $_GET['nimi'];
	if($qnimi != ""){
		if($i==0){
			$query = $query . " WHERE " . "(rt.KOKONIMI LIKE '%" . $qnimi . "%')"; //OR (rt.SUKUNIMI LIKE '%" . $qnimi . "%')";
			$i++;
		}
		else{
			$query = $query . " AND " . "(rt.KOKONIMI LIKE '%" . $qnimi . "%')"; //OR (rt.SUKUNIMI LIKE '%" . $qnimi . "%')";
		}
	}
}
if(isset($_GET['paikkakunta'])){
	$qpaikkakunta = $_GET['paikkakunta'];
	if($qpaikkakunta != "Paikkakunta" && $qpaikkakunta != "Etayhteys"){
		if($i==0){
			$query = $query . " WHERE " . "(rt.PAIKKAKUNTA='" . $qpaikkakunta . "')";
			$i++;
		}
		else{
			$query = $query . " AND " . "(rt.PAIKKAKUNTA='" . $qpaikkakunta . "')";
		}
	}
	if($qpaikkakunta == "Etayhteys"){
		if($i==0){
			$query = $query . " WHERE " . "(rt.ETAYHTEYS=1)";
			$i++;
		}
		else{
			$query = $query . " AND " . "(rt.ETAYHTEYS=1)";
		}
	}
}
if(isset($_GET['cbox'])){
	$qcbox = $_GET['cbox'];
	foreach($qcbox as $var){
		if($i==0){
			$query = $query . " WHERE " . "(eo.OSAAMISEN_NIMI='" . $var . "')";
			$i++;
			//echo $var;
		}
		else{
			$query = $query . " AND " . "(eo.OSAAMISEN_NIMI='" . $var . "')";
			//echo $var;
		}
	}
}

$query = $query . ";"; //hakulausekkeen loppu
/*
$query = htmlspecialchars($query); //muuntaa html merkit sopiviksi

$query = mysqli_real_escape_string($conn, $query); //estää sql-injektion
*/
$rawresults = mysqli_query($conn, $query);

if(mysqli_num_rows($rawresults) > 0){ //jos tuloksia on
	while($results = mysqli_fetch_array($rawresults)){ //looppaa kun tietojen siirto tauluun onnistuu
		echo $results['KOKONIMI']."<br>".$results['KOULUTUS']."<br>".$results['PAIKKAKUNTA']."<br>".$results['KUVAUS']
		."<br>".$results['EMAIL']."<br>".$results['PUHELINNRO']."<br><br>";
	}
}
else{ //jos tuloksia ei ole
	echo "Hakuehtoja vastaavia ravitsemusterapeutteja ei löytynyt.";
}

?>
</main>

<?php
	require "footer.php";
?>
