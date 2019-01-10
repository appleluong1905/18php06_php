<?php 
	class ConnectDB {
		function connect_db() {
			$conn = mysqli_connect('localhost', 'root', 'none', '18php06_mvc');
			if (mysqli_connect_errno()) {
			  	echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}

			mysqli_set_charset($conn, "utf8");
			return $conn;
		}
	}

	class Model extends ConnectDB{
		public function getHome() {
			$sql = "SELECT * FROM news";
			$listNews = mysqli_query($this->connect_db(), $sql);
			return $listNews;
		}
	}
?>