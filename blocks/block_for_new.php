<div class="new">
<form name="" action="edit_new.php" method="get">
  <h3 align="center"><?php echo $title ?></h3>
	<p><?php echo substr($text_of_new, 0, 150); if(strlen($text_of_new) > 150){ echo "...";} ?></p>
	<?php 
		if (strlen($text_of_new) > 150) {
	?>
			<a href="index.php?full_new=<?php echo $id ?>">read more</a></br>
	<?php 
		}
	?>
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
	<hr/>
</div>
