<?php
	require "header.php";
?>

<main>
  <div class="wrapper-main">
    <section class="section-default">
    <h1>Rekisteröitymissivu</h1>
    <form action="includes/signup.inc.php" method="post"> <!-- Rekisteröitymis-skriptin osoite -->
      <input type="text" name="etunimi" placeholder="Etunimi">
      <input type="text" name="sukunimi" placeholder="Sukunimi">
      <input type="text" name="paikkakunta" placeholder="Paikkakunta">
      <input type="text" name="osoite" placeholder="Osoite">
      <input type="number" name="puhelinnumero" placeholder="Puhelinnumero">
      <input type="text" name="sähköposti" placeholder="Sähköposti">
      <input type="password" name="salasana" placeholder="Salasana">
      <input type="password" name="salasana-toisto" placeholder="Kirjoita salasana uudestaan">
      <button type="submit" name="rekisteröidy-laheta">Rekisteröidy</button>
    </form>

  </div>

</main>

<?php
	require "footer.php";
?>
