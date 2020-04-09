<?php
	require "header.php";
	require "header_login.php";
?>
<main>


<?php
if(isset($_POST['signin_submit'])){
	require 'includes/dbh.inc.php';
	
	$mail = $_POST['email'];
	$pwd = $_POST['pswd'];
	
	if(empty($mail)||empty($pwd)){
		header("Location: signin.php?error=emptyfields");
		exit();
	}else{
		$sql = "SELECT * FROM ravitsemusterapeutti WHERE email=?;";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: signin.php?error=sqlerror");
			exit();
		}else{
			mysqli_stmt_bind_param($stmt, "s", $mail);
			mysqli_stmt_execute($stmt);
			$result = mysqli_stmt_get_result($stmt);
			if($row = mysqli_fetch_assoc($result)){
				$pwdCheck = password_verify($pwd, $row['PASSWORD']);
				if($pwdCheck == false){
					header("Location: signin.php?error=wrongpw");
					exit();
				}else if($pwdCheck == true){
					session_start();
					$_SESSION['id'] = $row['HENKILO_ID'];
					$_SESSION['email'] = $row['EMAIL'];
					$_SESSION['etunimi'] = $row['ETUNIMI'];
					$_SESSION['sukunimi'] = $row['SUKUNIMI'];
					$_SESSION['paikkakunta'] = $row['PAIKKAKUNTA'];
					$_SESSION['osoite'] = $row['OSOITE'];
					$_SESSION['puhelin'] = $row['PUHELINNRO'];
					
					header("Location: index.php?login=success");
					exit();
					
				}else{
					header("Location: signin.php?error=unknown");
					exit();
				}
				
			}else{
				header("Location: signin.php?error=nouser");
				exit();
			}
		}
	}
	
}
if(isset($_GET['error'])){
	
	if($_GET['error']== "wrongpw"){
		echo '<h1>Väärä salasana.</h1>';
	}else if($_GET['error']== "emptyfields"){
		echo '<h1>Tietoja täyttämättä.</h1>';
	}
	else if($_GET['error']== "sqlerror"){
		echo '<h1>SQL ERROR</h1>';
	}else if($_GET['error']== "nouser"){
		echo '<h1>Käyttäjää ei löytynyt.</h1>';
	}
	
}
?>

</main>
