<div id="content">
  <div id="right_content" class="shadow border_radius ">
		<div id="for_log">
		
<?php 	
		$count_users = count(get_all_users());
		echo "number of users: $count_users";
		
		if (!empty($_SESSION["login"]) && !empty($_SESSION["password"])) {
			require_once "blocks/log_on.php";
			}
		else{
			require_once "blocks/log_form.php";
		}
?>
		</div>
	</div>
	<div id="left_content" class="shadow border_radius ">
		
<?php if (!empty($_SESSION["login"]) && !empty($_SESSION["password"])) {
		?>
			<a href="add_new.php"><input type="button" value="add"></a>
		<?php }
?>
<?php
			if (!empty($_GET["full_new"])){
				$main_new = get_main_new($_GET["full_new"]);
			for ($i=0; $i < count($main_new); $i++) {
				$id = $main_new["$i"]["id"];
				$title = $main_new["$i"]["title"];
				$text_of_new = $main_new["$i"]["text_of_new"];
				include "blocks/block_for_main_new.php";
			}
			}
			else {
		
			$news = get_all_news();
			for ($i=0; $i < count($news); $i++) {
				$id = $news["$i"]["id"];
				$title = $news["$i"]["title"];
				$text_of_new = $news["$i"]["text_of_new"];
				include "blocks/block_for_new.php";
			}
			}
?>			
	</div>
</div>
