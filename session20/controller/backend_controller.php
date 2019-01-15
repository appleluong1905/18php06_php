<?php 
	class BackendController {
		/*
			* Description: Xu ly yeu cau o backend
			* Created by CanhLH
			* Created 15/01/2019
		*/
		public function handleRequest() {
			$controller = isset($_GET['controller'])?$_GET['controller']:'dashboard';
			$action = isset($_GET['action'])?$_GET['action']:'list';

			if ($controller == 'dashboard') {
					// day la trang dashboard
					include 'view/admin/dashboard.php';
			} else if ($controller == 'news'){
					// Xu ly them sua xoa news
					$this->handleNews($action);

			} else if ($controller == 'products'){
					// Xu ly them sua xoa products				 
				  $this->handleProduct($action);

			}
		}
		public function handleNews($action) {
			switch ($action) {
				case 'list':
					# code...
					break;
				case 'add':
					// xu ly add news
					if (isset($_POST['add'])) {
						var_dump($_POST);
					}
					include 'view/admin/news/add.php';
					break;
				case 'edit':
					# code...
					break;
				case 'delete':
					# code...
					break;
				default:
					# code...
					break;
			}
		}
		public function handleProduct($action) {
			echo $action;
		}
	}
?>