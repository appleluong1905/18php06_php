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
	public function login($username, $password) {
		$sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($this->connect_db(), $sql);
		return $result->fetch_assoc();
	}
}
?>
