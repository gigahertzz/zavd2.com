<?php
  if(!empty($_POST["title"]) && !empty($_POST["text_of_new"])) {
		$title = $_POST["title"];
		$text_of_new = $_POST["text_of_new"];
	}
 ?>

<form name="" action="edit_new.php?id=<?php echo $id ?>" method="POST">
	<label>title</label><br />
	<input type="text" name="title" value="<?php echo $title ?>"/><br />
	<label>new</label><br />
	<textarea  name="text_of_new" rows="20" cols="80"><?php echo $text_of_new; ?></textarea><br />
	<input type ="hidden" name="but_for_edit" value="<?php echo $id ?>" />
	<input type ="submit" value="edit" />
</form>
<?php
		if(isset($_POST["but_for_edit"])){
			$all_is_ok = edit_new($id, strip_tags($_POST["title"]), strip_tags($_POST["text_of_new"]));
				if ($all_is_ok) {
					echo "data was change"."<br/>";
				}
				
				else {echo "u didnt wrote data"."<br />";}
			}
?>
<a href="index.php">return to main page</a>
