<!---Luodaan yhteys tietokantaan>
<?php
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "ravitsemusterapeuttisovellus";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if (!$conn) {
  die("Yhteys tietokantaan epäonnistui ".mysqli_connect_error());
}
