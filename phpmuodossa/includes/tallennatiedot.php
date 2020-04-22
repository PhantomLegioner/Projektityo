<?php
	session_start();
	require "dbh.inc.php";
	$email = $_POST['email'];
if(isset($_POST['tallenna_submit'])){

	$etunimi = $_POST['etunimi'];
	$sukunimi = $_POST['sukunimi'];
	$kaupunki = $_POST['paikkakunta'];
	$osoite = $_POST['osoite'];
	$puhelin = $_POST['puhelinnumero'];
	$email = $_POST['email'];
	$koulutus = $POST['koulutus'];
	$kuvaus = $_POST['kuvaus'];

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
	}if(!empty($koulutus)){
		$sql = "UPDATE ravitsemusterapeutti SET KOULUTUS='".$koulutus."' WHERE EMAIL='".$email."'";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../profiili.php?error=sqlerror");
			exit();
		}else{
			//mysqli_stmt_bind_param($stmt, "ss",$etunimi,$email);
			mysqli_stmt_execute($stmt);

		$_SESSION['koulutus'] = $koulutus;
		}
	}

	if(!empty($kuvaus)){
		$sql = "UPDATE ravitsemusterapeutti SET KUVAUS='".$kuvaus."' WHERE EMAIL='".$email."'";
		$stmt = mysqli_stmt_init($conn);
		if(!mysqli_stmt_prepare($stmt,$sql)){
			header("Location: ../profiili.php?error=sqlerror");
			exit();
		}else{
			//mysqli_stmt_bind_param($stmt, "ss",$etunimi,$email);
			mysqli_stmt_execute($stmt);

		$_SESSION['kuvaus'] = $kuvaus;
		}
	}

	header("Location: ../profiili.php?change=succesful");


}

else if(isset($_POST['btn_etunimi'])){
	$sql = "UPDATE ravitsemusterapeutti SET ETUNIMI='' WHERE EMAIL='".$email."'";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../profiili.php?error=delete1");
		exit();
	}else{

		mysqli_stmt_execute($stmt);
		$_SESSION['etunimi'] = "";
	}

	header("Location: ../profiili.php?delete=success");
}else if(isset($_POST['btn_sukunimi'])){
	$sql = "UPDATE ravitsemusterapeutti SET SUKUNIMI='' WHERE EMAIL='".$email."'";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../profiili.php?error=delete2");
		exit();
	}else{

		mysqli_stmt_execute($stmt);
		$_SESSION['sukunimi'] = "";
	}
	header("Location: ../profiili.php?delete=success");


}else if(isset($_POST['btn_paikkakunta'])){
	$sql = "UPDATE ravitsemusterapeutti SET PAIKKAKUNTA='' WHERE EMAIL='".$email."'";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../profiili.php?error=delete3");
		exit();
	}else{

		mysqli_stmt_execute($stmt);
		$_SESSION['paikkakunta'] = "";
	}
	header("Location: ../profiili.php?delete=success");

}else if(isset($_POST['btn_osoite'])){
	$sql = "UPDATE ravitsemusterapeutti SET OSOITE='' WHERE EMAIL='".$email."'";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../profiili.php?error=delete4");
		exit();
	}else{

		mysqli_stmt_execute($stmt);
		$_SESSION['osoite'] = "";
	}
	header("Location: ../profiili.php?delete=success");

}else if(isset($_POST['btn_puhelin'])){
	$sql = "UPDATE ravitsemusterapeutti SET PUHELINNRO='' WHERE EMAIL='".$email."'";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../profiili.php?error=delete5");
		exit();
	}else{

		mysqli_stmt_execute($stmt);
		$_SESSION['puhelin'] = "";
	}
	header("Location: ../profiili.php?delete=success");

}else if(isset($_POST['btn_koulutus'])){
	$sql = "UPDATE ravitsemusterapeutti SET KOULUTUS='' WHERE EMAIL='".$email."'";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../profiili.php?error=delete6");
		exit();
	}else{

		mysqli_stmt_execute($stmt);
		$_SESSION['kuvaus'] = "";
	}
	header("Location: ../profiili.php?delete=success");

}
else if(isset($_POST['btn_kuvaus'])){
	$sql = "UPDATE ravitsemusterapeutti SET KUVAUS='' WHERE EMAIL='".$email."'";
	$stmt = mysqli_stmt_init($conn);
	if(!mysqli_stmt_prepare($stmt,$sql)){
		header("Location: ../profiili.php?error=delete7");
		exit();
	}else{

		mysqli_stmt_execute($stmt);
		$_SESSION['kuvaus'] = "";
	}
	header("Location: ../profiili.php?delete=success");

}
