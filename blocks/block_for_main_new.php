<div class="new">
<form name="" action="edit_new.php" method="get">
  <h3 align="center"><?php echo $title ?></h3>
	<p><?php echo $text_of_new ?></p>
	<a href="index.php">return at main page</a></br>
	<?php
		if (!empty($_SESSION["login"]) && !empty($_SESSION["password"])) {
	?> 
		<a href="edit_new.php?id=<?php echo $id ?>"><input type="button" value="edit"></a>
		<input type="hidden" name="delid" value="<?php echo $id ?>" /> 
		<input type="submit" value="delete" />
	<?php
		}	
	?>
</form>
</div>
