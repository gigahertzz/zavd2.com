<?php require_once "lib/functions.php" ?>

<form name="add_new" action="add_new.php" method="post">
  <label>title</label><br/>
	<input type="text" name="title" value=" <?php if(!empty($_POST["title"])) echo $_POST["title"]; ?>"><br/>
	<label>new</label><br/>
	<textarea  name="text_of_new" rows="20" cols="80"><?php if(!empty($_POST["text_of_new"])) echo $_POST["text_of_new"]; ?></textarea><br />
	<input type="submit" name="but_for_add" value="add">
</form>

<?php
	if(isset($_POST["but_for_add"])){
		$stitle = strip_tags($_POST["title"]);
		$stext_of_new = strip_tags($_POST["text_of_new"]);

		$all_is_ok = add_new($stitle,$stext_of_new);

		if ($all_is_ok) { 
		echo "data included!"."<br />";
	
		}
		else {
			echo "u didnt wrote data"."<br />";
		}
	}
?>
<a href="index.php">return to main page</a>
