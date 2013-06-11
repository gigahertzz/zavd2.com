<?php
  require_once "start.php";
	$login = htmlspecialchars($_POST["login"]);
	$password = htmlspecialchars($_POST["password"]);
	$password = md5($password);
	if (check_user($login, $password)){
		 $_SESSION["login"] = $login;
		 $_SESSION["password"] = $password;
	}
	else $_SESSION["error_log"] = 1;
	echo "<script>document.location.replace('index.php');</script>";
?>
