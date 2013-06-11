<?php
  if(isset($_POST["button_logaut"])) {
		unset($_SESSION["login"]);
		unset($_SESSION["password"]);
		echo "<script>document.location.replace('index.php');</script>";
	}
?>
<p> user: <?php echo $_SESSION["login"]; ?></p>
<form name="log" action="" method="post">
<input type ="submit" name="button_logaut" value="Вийти"/>
</form>

