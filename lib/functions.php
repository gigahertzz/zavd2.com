<?php 
  
	$mysqli = false;

	function connect_DB(){
		global $mysqli;
		$mysqli = new mysqli("localhost", "root", "admin4ik", "zavd2.com");
		$mysqli->query("SET NAMES 'utf8'");
	}
	
	function close_DB(){
		global $mysqli;
		$mysqli->close();
	}
	
	function result_set_to_array($result_set){
		$array = array();
		while (($row = $result_set->fetch_assoc()) != false)
			$array[] = $row;
		return $array;
	}
	
	function get_all_news(){
		global $mysqli;
		connect_DB();
		$result_set = $mysqli->query("SELECT * FROM `news`");
		close_DB();
		return result_set_to_array($result_set);
	}
	
	function get_main_new($id){
		global $mysqli;
		connect_DB();
		$result_set = $mysqli->query("SELECT * FROM `news` WHERE `id` = '$id'");
		close_DB();
		return result_set_to_array($result_set);
	}
	
	function add_new($title, $text_of_new) {
		global $mysqli;
		connect_DB();
		if(!empty($title) || !empty($text_of_new) ){
		$all_is_ok = $mysqli->query("INSERT INTO `news` (`title`, `text_of_new`) VALUES ('$title', '$text_of_new')");
		close_DB();
		return $all_is_ok;
		}
		else {
		return false;
		}
	}
	
	function add_user($login, $password) {
		global $mysqli;
		connect_DB();
		$all_is_ok = $mysqli->query("INSERT INTO `users` (`login`, `password`) VALUES ('$login', '$password')");
		close_DB();
		return $all_is_ok;
	}
	
	function check_user($login, $password){
		global $mysqli;
		connect_DB();
		$result_set = $mysqli->query("SELECT * FROM `users` WHERE  `login` = '$login' AND `password` = '$password'");
		close_DB();
		if ($result_set->fetch_assoc()) return true;
		else return false;
	}
	
	function edit_new($id, $title, $text_of_new){
		global $mysqli;
		connect_DB();
		if(!empty($title) || !empty($text_of_new) ){
		$all_is_ok = $mysqli->query("UPDATE `news` SET `title`='$title', `text_of_new`='$text_of_new'  WHERE `id`='$id'");
		close_DB();
		return $all_is_ok;
		}
		else {
		return false;
		}
		
	}
	
		function get_all_users(){
		global $mysqli;
		connect_DB();
		$result_set = $mysqli->query("SELECT * FROM `users`");
		close_DB();
		return result_set_to_array($result_set);
		
	}
	
	function delete_new($id){
		global $mysqli;
		connect_DB();
		$mysqli->query("DELETE FROM `news` WHERE `id` = '$id'");
		close_DB();
		return true;
	}
?>
