<!--Php:n sulkua ei tarvitse jos sen jälkeen ei ole HTML tai muuta -->
<?php
if (isset($_POST['rekisteröidy-laheta'])) {
  require 'dbh.inc.php';

  $etunimi = $_POST['etunimi'];
  $sukunimi = $_POST['sukunimi'];
  $paikkakunta = $_POST['paikkakunta'];
  $osoite = $_POST['osoite'];
  $puhelinnumero = $_POST['puhelinnumero'];
  $sahkoposti = $_POST['sähköposti'];
  $salasana = $_POST['salasana'];
  $salasanaToisto = $_POST['salasana-toisto'];
  //kenttien tarkistus -- KOrjaa osoite
  if (empty($etunimi) || empty($sukunimi) || empty($paikkakunta) || empty($osoite) || empty($puhelinnumero) || empty($sahkoposti) || empty($salasana) || empty($salasanaToisto)) {
    header("Location: ../signup.php?error=emptyfields&etunimi=".$etunimi."&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    exit();

  }
  elseif (!filter_var($sahkoposti, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&etunimi=".$etunimi."&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero);
    exit();
  }

  elseif (!preg_match("/^[a-zA-Z]*$/",$etunimi)) {
    header("Location: ../signup.php?error=invalidnimi&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    exit();
  }

  elseif (!preg_match("/^[a-zA-Z]*$/",$sukunimi)) {
    header("Location: ../signup.php?error=invalidnimi&etunimi=".$etunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    exit();
  }
  elseif (!preg_match("/^[a-zA-Z]*$/",$paikkakunta)) {
    header("Location: ../signup.php?error=invalidnimi&etunimi=".$etunimi."&sukunimi=".$sukunimi."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    exit();
  }

  elseif (!preg_match("/^[0-9]*$/",$puhelinnumero)) {
    header("Location: ../signup.php?error=invalidnimi&etunimi=".$etunimi."&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    exit();
  }

  elseif ($salasana !== $salasanaToisto) {
    header("Location: ../signup.php?error=passwordcheck&etunimi=".$etunimi."&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    exit();
  }

  //Käyttäjän tarkistus
  else {
    $sql = "SELECT EMAIL FROM ravitsemusterapeutti WHERE EMAIL=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../signup.php?error=sqlerror1");
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $sahkoposti);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $tarkistus = mysqli_stmt_num_rows($stmt);
      if($tarkistus > 0) {
        header("Location: ../signup.php?error=emailtaken");
      }
      else {
        $sql = "INSERT INTO ravitsemusterapeutti (ETUNIMI, SUKUNIMI, PAIKKAKUNTA, OSOITE, EMAIL, PASSWORD, PUHELINNRO) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../signup.php?error=sqlerror2");
          exit();
        }
        else {
          $hashedSalasana = password_hash($salasana, PASSWORD_DEFAULT);
          mysqli_stmt_bind_param($stmt, "ssssssi", $etunimi, $sukunimi, $paikkakunta, $osoite, $sahkoposti, $salasana, $puhelinnumero);
          mysqli_stmt_execute($stmt);
          header("Location: ../signup.php?signup=success");
          exit();
        }
      }
    }
    //mysqli_stmt_close($stmt);
    //mysqli_close($conn);

  }
  //else {
    //header("Location: ../signup.php");
    //exit();
  //}

  mysqli_stmt_close($stmt);
  mysqli_close($conn);

}
