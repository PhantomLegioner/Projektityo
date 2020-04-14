<?php
	require "header.php";
	require "header_login.php";
?>

<main>
<h2><b>Muokkaa tietoja</b></h2>
<?php
	if(!isset($_SESSION['email'])){
		header("Location: index.php?error=accessDenied");
	}
if(isset($_GET['change'])){
	if($_GET['change']== "succesful"){
		echo '<h1>Tiedot Tallennettu!</h1>';
	}
}
echo '<form method="post" action="includes/tallennatiedot.php">
	<label>Etunimi</label><input type="text" name="etunimi" placeholder="'.$_SESSION['etunimi'].'"><button name="btn_etunimi" type="submit">Tyhjennä</button><br>
	<label>Sukunimi</label><input type="text" name="sukunimi"placeholder="'.$_SESSION['sukunimi'].'"><button name="btn_sukunimi" type="submit">Tyhjennä</button><br>
	<label>paikkakunta</label><input type="text" name="paikkakunta"placeholder="'.$_SESSION['paikkakunta'].'"><button name="btn_paikkakunta" type="submit">Tyhjennä</button><br>
	<label>Osoite</label><input type="text" name="osoite"placeholder="'.$_SESSION['osoite'].'"><button name="btn_osoite" type="submit">Tyhjennä</button><br>
	<label>Sähköposti</label><input type="text" readonly name="email" value="'.$_SESSION['email'].'"><br>
	<label>Puhelin numero</label><input type="text" name="puhelinnumero"placeholder="'.$_SESSION['puhelin'].'"><button type="submit" name="btn_puhelin">Tyhjennä</button><br>
	<label>Kuvaus</label><br><textarea name="kuvaus" rows="8" cols="70" >'.$_SESSION['kuvaus'].'</textarea><button type="submit" name="btn_kuvaus">Tyhjennä</button><br>
	<button type="submit" name="tallenna_submit">Tallenna</button>
</form>';

?>



</main>

<?php
	require "footer.php";
