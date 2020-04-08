<?php
	require "header.php";
?>

<main>
  <div class="wrapper-main">
    <section class="section-default">
    <h1>Ajanvaraussivu</h1>
    <form action="" method="post"> <!-- Ajanvaraus-skriptin osoite -->
      <input type="text" name="etunimi" placeholder="Varaajan etunimi"><br />
      <input type="text" name="sukunimi" placeholder="Varaajan sukunimi"><br />
      <input type="text" name="terapeutti" placeholder="terapeutin nimi"><br />
      <input type="text" name="palvelu" placeholder="Palvelun nimi"><br />
      <input type="text" name="Paiva" placeholder="Päivämäärä"><br />
      <input type="text" name="aloitusaika" placeholder="Aloitusaika"><br />
      <input type="text" name="lopetusaika" placeholder="Lopetusaika"><br />
      <button type="submit" name="varaa-laheta">Varaa Aika</button><br />
    </form>

  </div>

</main>
