<?php 
require_once 'config/database.php';
class NewsModel extends ConnectDB {
	public function add($title) {
		$sql = "INSERT INTO news(title) VALUES('$title')";
		return mysqli_query($this->connect_db(), $sql);
	}
	public function listNews() {
		$sql = "SELECT * FROM news";
		return mysqli_query($this->connect_db(), $sql);
	}
	public function deleteNews($id) {
		$sql = "DELETE FROM news WHERE id = $id";
		return mysqli_query($this->connect_db(), $sql);
	}
	public function getNewsInfo($id) {
		$sql = "SELECT * FROM news WHERE id = $id";
		return mysqli_query($this->connect_db(), $sql);
	}
	public function edit($id, $title) {
		$sql = "UPDATE news SET title = '$title' WHERE id = $id";
		return mysqli_query($this->connect_db(), $sql);
	}
}
?>