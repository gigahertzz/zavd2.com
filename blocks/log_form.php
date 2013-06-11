<form name="log" action="log.php" method="post">
  <label>login</label><br/>
	<input type="text" name="login" size="14"/><br/>
	<label>password</label><br/>
	<input type="password" name="password" size="14"/><br /><br />
	<input type ="submit" name="button_log" value="Увійти"/>
</form>
<a href="registration.php">registration</a><br/>
<?php
if (!empty($_SESSION["error_log"])){
unset($_SESSION["error_log"]);
echo "failed login/password";
}
?>
