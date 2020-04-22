<?php
	require "header.php";
?>

<main>
  <div class="wrapper-main">
    <section class="section-default">
    <h1>Rekisteröitymissivu</h1>
    <form action="includes/signup.inc.php" method="post"> <!-- Rekisteröitymis-skriptin osoite -->
      <input type="text" name="etunimi" placeholder="Etunimi"><br />
      <input type="text" name="sukunimi" placeholder="Sukunimi"><br />
      <input type="text" name="paikkakunta" placeholder="Paikkakunta"><br />
      <input type="text" name="osoite" placeholder="Osoite"><br />
      <input type="text" name="puhelinnumero" placeholder="Puhelinnumero"><br />
      <input type="text" name="sähköposti" placeholder="Sähköposti"><br />
			<input type="text" name="koulutus" placeholder="Koulutus"><br />
      <input type="text" name="kuvaus" placeholder="Kuvaus itsestäsi"><br />
      <input type="password" name="salasana" placeholder="Salasana"><br />
      <input type="password" name="salasana-toisto" placeholder="Kirjoita salasana uudestaan"><br />
			<input type="checkbox" name="cbox[]" id="cbox" value="0">Ruoanvalinta helpommaksi<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="1">Energisempi arki<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="2">Liikkujan ravitsemus<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="3">Ahdistava ruoka<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="4">Vegaaniravitsemus<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="5">Eettisesti ja ekologisesti kestävä ruokavalio<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="6">Tyypin 1 diabetes<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="7">Suolistosairaudet ja vatsaongelmat<br>
			<input type="checkbox" name="cbox[]" id="cbox" value="8">Lapsiperheen ravitsemus<br>
			<input type="checkbox" name="etayhteys" id="etayhteys" value="Etäyhteys">Etäyhteys<br>
      <button type="submit" name="rekisteröidy-laheta">Rekisteröidy</button><br />
    </form>

  </div>

</main>

<?php
	require "footer.php";
?>
