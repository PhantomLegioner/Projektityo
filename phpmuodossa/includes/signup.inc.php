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
  $koulutus = $_POST['koulutus'];
  $kuvaus = $_POST['kuvaus'];
  $salasana = $_POST['salasana'];
  $salasanaToisto = $_POST['salasana-toisto'];
  $etayhteys = $_POST['etayhteys'];
  if(isset($_POST['etayhteys'])){
    $etayhteys = '1';
  }
  else{
    $etayhteys = '0';
  }
  //kenttien tarkistus
  if (empty($etunimi) || empty($sukunimi) || empty($paikkakunta) || empty($osoite) || empty($puhelinnumero) || empty($sahkoposti) || empty($kuvaus) || empty($koulutus) || empty($salasana) || empty($salasanaToisto)) {
    header("Location: ../signup.php?error=emptyfields&etunimi=".$etunimi."&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    echo '<h1>Tietoja puuttui!</h1>';
    exit();

  }
  elseif (!filter_var($sahkoposti, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../signup.php?error=invalidmail&etunimi=".$etunimi."&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero);
    echo '<h1>Sähköposti oli väärä!</h1>';
    exit();
  }

  elseif (!preg_match("/^[a-öA-Ö]*$/",$etunimi)) {
    header("Location: ../signup.php?error=invalidnimi&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    echo '<h1>Etunimi sisälsi kiellettyjä merkkejä!</h1>';
    exit();
  }

  elseif (!preg_match("/^[a-äA-Ö]*$/",$sukunimi)) {
    header("Location: ../signup.php?error=invalidnimi&etunimi=".$etunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    echo '<h1>Sukunimi sisälsi kiellettyjä merkkejä!</h1>';
    exit();
  }
  elseif (!preg_match("/^[a-äA-Ö]*$/",$paikkakunta)) {
    header("Location: ../signup.php?error=invalidnimi&etunimi=".$etunimi."&sukunimi=".$sukunimi."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    echo '<h1>Paikkakunta sisälsi kiellettyjä merkkejä!</h1>';
    exit();
  }

  elseif (!preg_match("/^[0-9]*$/",$puhelinnumero)) {
    header("Location: ../signup.php?error=invalidnimi&etunimi=".$etunimi."&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    echo '<h1>Puhelinnumero sisälsi kiellettyjä merkkejä!</h1>';
    exit();
  }

  elseif ($salasana !== $salasanaToisto) {
    header("Location: ../signup.php?error=passwordcheck&etunimi=".$etunimi."&sukunimi=".$sukunimi."&paikkakunta=".$paikkakunta."&osoite=".$puhelinnumero."&sposti=".$sahkoposti);
    echo '<h1>Salasanat eivät olleet samoja!</h1>';
    exit();
  }

  //Käyttäjän tarkistus
  else {
    $sql = "SELECT EMAIL FROM ravitsemusterapeutti WHERE EMAIL=?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../signup.php?error=sqlerror1");
      echo '<h1>Yhteys katkesi!</h1>';
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "s", $sahkoposti);
      mysqli_stmt_execute($stmt);
      mysqli_stmt_store_result($stmt);
      $tarkistus = mysqli_stmt_num_rows($stmt);
      if($tarkistus > 0) {
        header("Location: ../signup.php?error=emailtaken");
        echo '<h1>Varattu Sähköposti!</h1>';
        exit();
      }
      else {
        $sql = "INSERT INTO ravitsemusterapeutti (ETUNIMI, SUKUNIMI, KOKONIMI, OSOITE, EMAIL, PUHELINNRO, PAIKKAKUNTA, ETAYHTEYS, KOULUTUS, KUVAUS, PASSWORD) VALUES (?, ?, CONCAT(ETUNIMI,' ', SUKUNIMI), ?, ?, ?, ?,?, ?, ?, ?)";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("Location: ../signup.php?error=sqlerror2");
          echo '<h1>Yhteys katkesi!</h1>';
          exit();
        }
        else {
          $hashedSalasana = password_hash($salasana, PASSWORD_DEFAULT); //Salasanan hashaaminen
          mysqli_stmt_bind_param($stmt, "ssssssssss", $etunimi, $sukunimi, $osoite, $sahkoposti, $puhelinnumero , $paikkakunta, $etayhteys, $koulutus, $kuvaus, $hashedSalasana);
          mysqli_stmt_execute($stmt);
          header("Location: ../signup.php?signup=success");
          echo 'Rekisteröityminen onnistui!</h1>';
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
