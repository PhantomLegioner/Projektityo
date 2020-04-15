<!--Php:n sulkua ei tarvitse jos sen jälkeen ei ole HTML tai muuta -->
<?php
if (isset($_POST['varaa-laheta'])) {
  require 'dbh.inc.php';

  $varaaja_etunimi = $_POST['etunimi'];
  $varaaja_sukunimi = $_POST['sukunimi'];
  $puhelinnumero = $_POST['puhelinnumero'];
  $sahkoposti = $_POST['sahköposti'];
  $terapeutti_etunimi = $_POST['terapeutti_etunimi'];
  $terapeutti_sukunimi = $_POST['terapeutti_sukunimi'];
  $palvelu = $_POST['palvelu'];
  $paivamaara = $_POST['paivamaara'];
  $aloitusaika = $_POST['aloitusaika'];
  $lopetusaika = $_POST['lopetusaika'];

  //kenttien tarkistus -- KOrjaa osoite
  if (empty($varaaja_etunimi) || empty($varaaja_sukunimi) || empty($puhelinnumero) || empty($sahkoposti) || empty($terapeutti_etunimi) || empty($terapeutti_sukunimi) || empty($palvelu) || empty($paivamaara) || empty($aloitusaika) || empty($lopetusaika)) {
    header("Location: ../signup.php?error=emptyfields&etunimi=".$etunimi."&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    echo "Sinulta puuttui tietoja. Täydennä tarvittavat tiedot.";
    exit();

  }
  elseif (!filter_var($sahkoposti, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&etunimi=".$etunimi."&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero);
    echo "Sähköposti oli kirjoitettu väärin.";
    exit();
  }

  elseif (!preg_match("/^[a-zA-Z]*$/",$etunimi)) {
    header("Location: ../signup.php?error=invalidnimi&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    echo "Etunimessä oli vääriä merkkejä.";
    exit();
  }

  elseif (!preg_match("/^[a-zA-Z]*$/",$sukunimi)) {
    header("Location: ../signup.php?error=invalidnimi&etunimi=".$etunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    echo "Sukunimessä oli vääriä merkkejä.";
    exit();
  }


  elseif (!preg_match("/^[0-9]*$/",$puhelinnumero)) {
    header("Location: ../signup.php?error=invalidnimi&etunimi=".$etunimi."&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    echo "Sukunimessä oli vääriä merkkejä.";
    exit();
  }

  //Terapeutin tarkistus
  else {
    $sql = "INSERT INTO varattu_aika (varaaja_etunimi, varaaja_sukunimi, puhelinnumero, email, terapeutti_etunimi, terapeutti_sukunimi, palvelu_valittu, paivamaara, aloitusaika, lopetusaika) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../resdervetime.inc.php?error=sqlerror2");
      echo "Tapahtui virhe";
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "sssssssdss", $varaaja_etunimi, $varaaja_sukunimi, $puhelinnumero, $sahkoposti, $terapeutti_etunimi, $terapeutti_sukunimi, $palvelu, $paivamaara, $aloitusaika, $lopetusaika);
      mysqli_stmt_execute($stmt);
      header("Location: ../signup.php?signup=success");
      echo "Ajanvaraus onnistui!";
      exit();
    }
  }

    //mysqli_stmt_close($stmt);
    //mysqli_close($conn);

  //else {
    //header("Location: ../signup.php");
    //exit();
  //}

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
