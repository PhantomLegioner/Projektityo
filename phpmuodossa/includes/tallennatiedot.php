<?php
if(isset($_POST['tallenna_submit'])){
	session_start();
	require "dbh.inc.php";
	$etunimi = $_POST['etunimi'];
	$sukunimi = $_POST['sukunimi'];
	$kaupunki = $_POST['paikkakunta'];
	$osoite = $_POST['osoite'];
	$puhelin = $_POST['puhelinnumero'];
	$email = $_POST['email'];
	
	if(!empty($etunimi)){
		$sql = "UPDATE ravitsemusterapeutti SET ETUNIMI='".$etunimi."' WHERE EMAIL='".$email."'";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../profiili.php?error=sqlerror");
			exit();
		}else{
			//mysqli_stmt_bind_param($stmt, "ss",$etunimi,$email);
			mysqli_stmt_execute($stmt);
			$_SESSION['etunimi'] = $etunimi;
		}
		
	}
	if(!empty($sukunimi)){
		$sql = "UPDATE ravitsemusterapeutti SET SUKUNIMI='".$sukunimi."' WHERE EMAIL='".$email."'";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../profiili.php?error=sqlerror");
			exit();
		}else{
			//mysqli_stmt_bind_param($stmt, "ss",$etunimi,$email);
			mysqli_stmt_execute($stmt);
			$_SESSION['sukunimi'] = $sukunimi;
		}
	}if(!empty($kaupunki)){
		$sql = "UPDATE ravitsemusterapeutti SET PAIKKAKUNTA='".$kaupunki."' WHERE EMAIL='".$email."'";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../profiili.php?error=sqlerror");
			exit();
		}else{
			//mysqli_stmt_bind_param($stmt, "ss",$etunimi,$email);
			mysqli_stmt_execute($stmt);
			$_SESSION['paikkakunta'] = $kaupunki;
		}
	}if(!empty($osoite)){
		$sql = "UPDATE ravitsemusterapeutti SET OSOITE='".$osoite."' WHERE EMAIL='".$email."'";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../profiili.php?error=sqlerror");
			exit();
		}else{
			//mysqli_stmt_bind_param($stmt, "ss",$etunimi,$email);
			mysqli_stmt_execute($stmt);
			$_SESSION['osoite'] = $osoite;
		}
	}if(!empty($puhelin)){
		$sql = "UPDATE ravitsemusterapeutti SET PUHELINNRO='".$puhelin."' WHERE EMAIL='".$email."'";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../profiili.php?error=sqlerror");
			exit();
		}else{
			//mysqli_stmt_bind_param($stmt, "ss",$etunimi,$email);
			mysqli_stmt_execute($stmt);
			$_SESSION['puhelin'] = $puhelin;
		}
	}
	
	header("Location: ../profiili.php?change=succesful");
	
	
	
}