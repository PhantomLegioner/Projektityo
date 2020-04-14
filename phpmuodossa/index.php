<?php
	require "header.php";
	require "header_login.php";
?>
<main>
	<?php
	if(isset($_GET['error'])){
		if($_GET['error']== "accessDenied"){
			echo '<h1>Et ole kirjautunut sisään.</h1>';
		}
	}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<!-- Alla yhteys iste luomaani/muokkamaani style.css -tiedostoon    -->
<link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
  </head>
  <body>
    <!-- <h1 id="h1">Hello, world!</h1>   -->
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<!-- Lisätään sosiaalisen median logot/linkit       -->
	<!-- a-luokan nimeksi Navbarin sijan Instagram, Fabeook ja Twitter    -->
  <a class="instagram" href="#">
  <img src="https://cdn3.iconfinder.com/data/icons/picons-social/57/38-instagram-256.png" width="35" height="35" alt=""></a>
    <a class="facebook" href="#">
  <img src="https://cdn3.iconfinder.com/data/icons/wpzoom-developer-icon-set/500/01-256.png" width="35" height="35" alt=""></a>
      <a class="twitter" href="#">
  <img src="https://cdn2.iconfinder.com/data/icons/font-awesome/1792/twitter-square-256.png" width="35" height="35" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

      <li class="nav-item active">
        <a class="nav-link" href="osaajamme.html">Osaajamme <span class="sr-only">(current)</span></a>
      </li>

	  <li class="nav-item active">
        <!-- <a class="nav-link" href="palvelumme.html">Palvelumme <span class="sr-only">(current)</span></a> -->
	   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="palvelumme.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="palvelumme.html">
          Palvelumme
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  <a class="dropdown-item" href="palvelumme.html" id="">Palvelumme</a>
          <a class="dropdown-item" href="energisempi.html" id="energisempi">Ruoanvalinta helpommaksi ja energisempi arki</a>
          <a class="dropdown-item" href="liikkujanvegaanin.html" id="liikkujan">Liikkujan ravitsemus ja vegaanin ravitsemus</a>
		  <a class="dropdown-item" href="ekologinenlapsiperheen.html" id="ekologinen">Ekologinen ravitsemus ja lapsiperheen ravitsemus</a>
		  <a class="dropdown-item" href="diabetessuolistosairaudet.html" id="diabetes">Tyypin 1.diabetes ja suolistosairaudet ja vatsaongelmat</a>
		  <a class="dropdown-item" href="ahistavaruoka.html" id="ahdistava">Ahdistava ruoka</a>
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
		  <a class="dropdown-item" href="ravitsemustiede.html" id="">Ravitsemustiede</a>
          <a class="dropdown-item" href="kenelleravitsemusterapiaa.html" id="kenelleravitsemusterapiaa">Kenelle ravitsemusterapiaa</a>
          <a class="dropdown-item" href="voikotervehyotya.html" id="">Voiko terve hyötyä ravitsemusterapiasta</a>
          <div class="dropdown-divider"></div>
          <!-- <a class="dropdown-item" href="#">Something else here</a>  -->
        </div>


      </li>
      </li>






	  <!--dropdown loppui     -->





	  	<li class="nav-item active">
        <a class="nav-link" href="otayhteytta.html" id="otayhteytta">Ota yhteyttä <span class="sr-only">(current)</span></a>
      </li>
	  	  	<li class="nav-item active">
        <a class="nav-link" href="ajanvaraus.php" id="varaaaika">Varaa aika <span class="sr-only">(current)</span></a>
      </li>
	  	  		      <li class="nav-item active">
        <a class="nav-link" href="index.html">Etusivu <span class="sr-only">(current)</span></a>
      </li>
	  </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li> -->


	  <!--
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>  Dropdown loppuu-->



	  <!--  Disabled alkaa        -->
      <!-- <li class="nav-item"> -->
        <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>   -->
      <!-- </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	  <div class="etusivu">
	  <!--Main-luokka alkaa. Vie suurimman osan tilasta etusivulla pystysuunnassa   -->
	  <div class="main>
        <h2 style="color: black" align="center"></h2>
<img src="https://raw.githubusercontent.com/MariaMariiia/Kaikkea/master/LARATE%20logo.png" class="img-fluid" alt="Responsive image" width="317" height="250"/>
      <!-- <h2 style="color:black" align="center" margin-bottom:"0.4em">Laillistetun ravitsemusterapeutin hakupalvelu</h2> -->
        <b></b><b></b>

        <p>Etsitkö luotettavaa tietoa ruokailuun tai syömiseen liityvissä kysymyksissä?</p>
      <p>Onko sinulla tai läheiselläsi haasteita ruoansulatuksen tai erityisruokavalioiden kanssa?</p>
<p>Me olemme ravitsemukseen koulutettu ammattikunta.</p>
      <p style margin-bottom:"6px">Tutustu ravitsemusterapeutteihin ja varaa aika ammattilaiselle:</p>
	  <!-- Alhaalla divissä main-luokka loppuu  -->
	  </div>
	  <!-- Main-luokka loppui äsken  -->
	  <!--   Nyt alkaa footer eli sivuston alaosa. Noin kolmasosa korkeudeltaan -->
	  <div class="footer">
	  <img src="https://cdn.pixabay.com/photo/2017/06/21/21/33/fruit-2428678__480.jpg" class ="img-fluid" alt="Responsive image" id="hedelmakuva">
	  </div>
	  <!-- Ylhäällä loppui footer-class  -->
      <form action="/action_page.php">

</form>
    </div>
  </body>
</html>
<?php
	require "footer.php";
?>
