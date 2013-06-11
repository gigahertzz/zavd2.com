<?php
  require_once "lib/functions.php";
	
	$news = get_all_news();
	
	if(isset($_GET['delid'])){
		$delid = ($_GET['delid']);
		delete_new($delid);
			echo '<script language="JavaScript" type="text/javascript">
				location="http://zavd2.com/index.php";
			</script>';
		}

	if ($_GET["id"]){
	$idd = $_GET["id"];
	}

	for ($i = 0; $i < count($news); $i++){
		$id = $news["$i"]["id"];
		$title = $news["$i"]["title"];
		$text_of_new = $news["$i"]["text_of_new"];
		if ($idd == $id){ 
			include "blocks/edit_form.php";
		}	
	}

	
?>
