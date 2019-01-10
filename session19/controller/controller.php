<?php 
	include 'model/model.php';
	class Controller {
		public function handleRequest() {
			$model = new Model();
			$list_news = $model->getHome();
			include 'view/home.php';
		}
	}
?>