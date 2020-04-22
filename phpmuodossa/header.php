<?php
session_start();
require "header_login.php";
?>

<?php
if(isset($_GET['error'])){
  if($_GET['error']== "accessDenied"){
    echo '<h1>Et ole kirjautunut sisään.</h1>';
  }
}

?>
<!DOCTYPE html>
  <html lang="en">
  <header>
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  	<!-- Alla yhteys iste luomaani/muokkamaani style.css -tiedostoon    -->
  <link rel="stylesheet" href="style.css">
      <title>Ravitsemusterapeutti</title>
    </head>
    <body>
      <!-- <h1 id="h1">Hello, world!</h1>   -->
  	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  	<!-- Lisätään sosiaalisen median logot/linkit       -->
  	<!-- a-luokan nimeksi Navbarin sijan Instagram, Fabeook ja Twitter    -->
    <a class="instagram" href="https://www.instagram.com/">
    <img src="https://cdn3.iconfinder.com/data/icons/picons-social/57/38-instagram-256.png" width="35" height="35" alt=""></a>
      <a class="facebook" href="https://facebook.com/">
    <img src="https://cdn3.iconfinder.com/data/icons/wpzoom-developer-icon-set/500/01-256.png" width="35" height="35" alt=""></a>
        <a class="twitter" href="https://twitter.com/explore">
    <img src="https://cdn2.iconfinder.com/data/icons/font-awesome/1792/twitter-square-256.png" width="35" height="35" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">

        <li class="nav-item active">
          <a class="nav-link" href="osaajamme.php">Osaajamme <span class="sr-only">(current)</span></a>
        </li>

  	  <li class="nav-item active">
          <!-- <a class="nav-link" href="palvelumme.html">Palvelumme <span class="sr-only">(current)</span></a> -->
  	   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="palvelumme.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="palvelumme.html">
            Palvelumme
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  		  <a class="dropdown-item" href="palvelumme.php" id="">Palvelumme</a>
            <a class="dropdown-item" href="energisempi.php" id="energisempi">Ruoanvalinta helpommaksi ja energisempi arki</a>
            <a class="dropdown-item" href="liikkujanvegaanin.php" id="liikkujan">Liikkujan ravitsemus ja vegaanin ravitsemus</a>
  		  <a class="dropdown-item" href="ekologinenlapsiperheen.php" id="ekologinen">Ekologinen ravitsemus ja lapsiperheen ravitsemus</a>
  		  <a class="dropdown-item" href="diabetessuolistosairaudet.php" id="diabetes">Tyypin 1.diabetes ja suolistosairaudet ja vatsaongelmat</a>
  		  <a class="dropdown-item" href="ahistavaruoka.php" id="ahdistava">Ahdistava ruoka</a>
            <div class="dropdown-divider"></div>
            <!-- <a class="dropdown-item" href="#">Something else here</a>  -->
          </div>


        </li>
        </li>




  	  <!-- Toinen dropdown alkaa. Se joka liittyy Ravitsemustiede-kohtaan, -->
  	          <!-- <a class="nav-link" href="palvelumme.html">Palvelumme <span class="sr-only">(current)</span></a> -->
  	  <li class="nav-item active">
          <!-- <a class="nav-link" href="palvelumme.html">Palvelumme <span class="sr-only">(current)</span></a> -->
  	   <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="ravitsemustiede.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="ravitsemustiede.html">
            Ravitsemustiede
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
  		  <a class="dropdown-item" href="ravitsemustiede.php" id="">Ravitsemustiede</a>
            <a class="dropdown-item" href="kenelleravitsemusterapiaa.php" id="kenelleravitsemusterapiaa">Kenelle ravitsemusterapiaa</a>
            <a class="dropdown-item" href="voikotervehyotya.php" id="">Voiko terve hyötyä ravitsemusterapiasta</a>
            <div class="dropdown-divider"></div>
            <!-- <a class="dropdown-item" href="#">Something else here</a>  -->
          </div>


        </li>
        </li>

  	  	<li class="nav-item active">
          <a class="nav-link" href="otayhteytta.php" id="otayhteytta">Ota yhteyttä <span class="sr-only">(current)</span></a>
        </li>
  	  	  	<li class="nav-item active">
          <a class="nav-link" href="ajanvaraus.php" id="varaaaika">Varaa aika <span class="sr-only">(current)</span></a>
        </li>
  	  	  <li class="nav-item active">
          <a class="nav-link" href="index.php">Etusivu <span class="sr-only">(current)</span></a>
        </li>
  	  </li>
      <li class="nav-item active">
        <a class="nav-link" href="signup.php" id="rekisteroidy">Rekisteröidy Palveluun <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="haku.php" id="hakeminen">Hakeminen <span class="sr-only">(current)</span></a>
      </li>
      </ul>
    </div>
  </nav>
</body>
</header>
</html>
