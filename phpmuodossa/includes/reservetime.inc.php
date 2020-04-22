<!--Php:n sulkua ei tarvitse jos sen jälkeen ei ole HTML tai muuta -->
<?php
if (isset($_POST['varaa-laheta'])) {
  require 'dbh.inc.php';

  $varaaja_etunimi = $_POST['etunimi'];
  $varaaja_sukunimi = $_POST['sukunimi'];
  $puhelinnumero = $_POST['puhelinnumero'];
  $sahkoposti = $_POST['sahkoposti'];
  $terapeutti_etunimi = $_POST['terapeutti_etunimi'];
  $terapeutti_sukunimi = $_POST['terapeutti_sukunimi'];
  $palvelu = $_POST['palvelu'];
  //Päivämäärän muuttaminen
  //$paivamaara = date('Y-m-d', strtotime($_POST['paivamaara']));
  $paivamaara = $_POST['paivamaara'];
  // $aika_str = strtotime($paivamaara);
  // if ($aika_str == false) {
  //   $aika_str = strtotime(str_replace('/','-', $paivamaara));
  // }
  $myDateTime = DateTime::createFromFormat('d/m/Y', $paivamaara);
  if (!$myDateTime) {
    throw new \UnexpectedValueException("Päivämäärän muuttamisessa tapahtui virhe: $paivamaara");
  }
  else {
    //$mysqlpaivamaara = date('Y-m-d',$myDateTime);
    $mysqlpaivamaara = $myDateTime->format('Y-m-d');
  }
  $aloitusaika = $_POST['aloitusaika'];
  $lopetusaika = $_POST['lopetusaika'];

  //Kenttien tarkistusta
  if (empty($varaaja_etunimi) || empty($varaaja_sukunimi) || empty($puhelinnumero) || empty($sahkoposti) || empty($terapeutti_etunimi) || empty($palvelu) || empty($paivamaara) || empty($aloitusaika) || empty($lopetusaika) ||  empty($terapeutti_sukunimi)) {
    header("Location: ../ajanvaraus.php?error=emptyfields&etunimi=".$varaaja_etunimi."&sukunimi=".$varaaja_sukunimi."&nro=".$puhelinnumero."&sposti=".$sahkoposti."&trpe=".$terapeutti_etunimi."&trps=".$terapeutti_sukunimi."&palvelu=".$palvelu."&paiva=".$paivamaara."&aloitus=".$aloitusaika."&lopetus=".$lopetusaika);
    //header("Location: ../ajanvaraus.php?error=emptyfields&etunimi=".$varaaja_etunimi."&sukunimi=".$varaaja_sukunimi."puhelinnumero=".$puhelinnumero."&email=".$sahkoposti."&terapertinetu=".$terapeutti_etunimi."&terapertinsuku=".$terapeutti_sukunimi."&palvelu=".$palvelu."&date=".$paivamaara."&start=".$aloitusaika."&stop=".$lopetusaika.);
     //|| empty($palvelu) || empty($paivamaara) || empty($aloitusaika) || empty($lopetusaika))
    echo '<h1>Sinulta puuttui tietoja!</h1>';
    exit();

  }
  if (!filter_var($sahkoposti, FILTER_VALIDATE_EMAIL)) {
    header("Location: ../ajanvaraus.php?error=invalidmail");
    echo '<h1>Sähköpostiosoite ei ollut oikeassa muodossa</h1>';
    exit();
  }

  elseif (!preg_match("/^[a-zA-Z]*$/",$etunimi)) {
    header("Location: ../ajanvaraus.php?error=invalidnimi");
    echo '<h1>Etunimessä oli vääriä merkkejä.</h1>';
    exit();
  }

  elseif (!preg_match("/^[a-zA-Z]*$/",$sukunimi)) {
    header("Location: ../ajanvaraus.php?error=invalidsukunimi");
    echo '<h1>Sukunimessä oli vääriä merkkejä.</h1>';
    exit();
  }


  elseif (!preg_match("/^[0-9]*$/",$puhelinnumero)) {
    header("Location: ../ajanvaraus.php?error=invalidpuhelinnumero");
    echo '<h1>Puhelinnumerossa saa olla vain numeroita!</h1>';
    exit();
  }
  //elseif ($lopetusaika > $aloitusaika)) {
    //header("Location: ../ajanvaraus.php?error=aika");
    //echo '<h1>Lopetusajan tulee olla aloitusaikaa myöhemmin!</h1>';
    //exit();
  //}

  //Terapeutin tarkistus
  else {
    $sql = "INSERT INTO varattu_aika (varaaja_etunimi, varaaja_sukunimi, puhelinnumero, email, terapeutti_etunimi, terapeutti_sukunimi, palvelu_valittu, paivamaara, aloitusaika, lopetusaika) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../reservetime.inc.php?error=sqlerror2");
      echo '<h1>Tapahtui virhe!</h1>';
      exit();
    }
    else {
      mysqli_stmt_bind_param($stmt, "ssssssssss", $varaaja_etunimi, $varaaja_sukunimi, $puhelinnumero, $sahkoposti, $terapeutti_etunimi, $terapeutti_sukunimi, $palvelu, $mysqlpaivamaara, $aloitusaika, $lopetusaika);
      mysqli_stmt_execute($stmt);
      header("Location: ../ajanvaraus.php?signup=success&paiva=".$mysqlpaivamaara);
      echo '<h1>Ajanvaraus onnistui!</h1>';
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
