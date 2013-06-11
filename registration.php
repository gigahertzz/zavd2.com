<?php
  require_once "start.php";
?>
<HTML>
<HEAD>
<TITLE>Реєстрація</TITLE>
<meta http-equiv="Content-type" content ="text/html"; charset="utf-8"/>
   <link rel="stylesheet" type="text/css" href="css/style.css">
</HEAD>
<BODY>
<div id="reg_form" class="shadow border_radius ">
	<h2>реєстрація</h2>
		<form name="reg" action="registration.php" method="post">
			<label>Введіть логін</label><br/>
			<input type="text" name="login" value="<?php if(!empty($_POST["login"])) echo $_POST["login"]?>"><br/><br/>
			<label>Введіть пароль</label><br/>
			<input type="password" name="password" value="<?php if(!empty($_POST["login"])) echo $_POST["password"]?>"><br/><br/>
			<label>Введіть пароль 1 more</label><br/>
			<input type="password" name="password2" value="<?php if(!empty($_POST["login"])) echo $_POST["password2"]?>"><br/><br/>
			<input type="submit" name="button_reg" value="Готово">
		</form>
<?php
if (!empty($_POST["button_reg"])) {
	$login = htmlspecialchars($_POST["login"]);
	$password = htmlspecialchars($_POST["password"]);
	$password2 = htmlspecialchars($_POST["password2"]);
	if (strlen($login) < 3) $all_is_ok = false;
	elseif (strlen($password) < 3) $all_is_ok = false;
	elseif ($password != $password2) $all_is_ok =false;
	else $all_is_ok = add_user($login, md5($password));
	if(!$all_is_ok)
	echo "Error"."<br/>";
	else echo "Реєстрація пройшла успішно"."<br/>";
}
?>
	<a href="index.php">повернутись на головну</a>
</div>

</BODY>
</HTML>
