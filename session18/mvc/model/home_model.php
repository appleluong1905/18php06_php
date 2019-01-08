<?php 
	include 'config/database.php';
	class HomeModel extends ConnectDB {

		function getHomePage() {
			$sql = "SELECT * FROM news";
			$listNews = mysqli_query($this->connect_db(), $sql);
    		return $listNews;
		}
		
	}
?>