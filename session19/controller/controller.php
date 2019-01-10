<?php 
	include 'model/model.php';
	class Controller {
		public function handleRequest() {

			$action = isset($_GET['news_id'])?'news_detail':"home";

			if ($action == 'home') {
				$model = new Model();
				$list_news = $model->getHome();
				include 'view/home.php';
			} else {
				$news_id = $_GET['news_id'];
				$model = new Model();
				$news_detail = $model->getNewsDetail($news_id);
				include 'view/news_detail.php';
			}

		}
	}
?>