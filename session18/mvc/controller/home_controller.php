<?php 
	include 'model/home_model.php';
	class HomeController {
		function xuly_yeucau() {
			// can lay thong tin tin tuc va san pham ra
			$model = new HomeModel();
			$list_news = $model->getHomePage();
			include 'view/home.php';
		}
	}
?>