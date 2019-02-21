<?php
	require_once 'model/news_model.php';
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

			} else if ($controller == 'users'){
					// Xu ly them sua xoa products				 
				  $this->handleUsers($action);

			}
		}
		public function handleNews($action) {
			switch ($action) {
				case 'list':
					if (!isset($_SESSION['login'])) {
						header("Location: admin.php?controller=users&action=login");
					}
					$newsModel = new NewsModel();
					$listNews = $newsModel->listNews();
					include 'view/admin/news/list.php';
					break;
				case 'add':
					if (!isset($_SESSION['login'])) {
						header("Location: admin.php?controller=users&action=login");
					}
					// xu ly add news
					if (isset($_POST['add'])) {
						$title = $_POST['title'];
						$newsModel = new NewsModel();
						if ($newsModel->add($title) === TRUE) {
							header("Location: admin.php?controller=news&action=list");
						}
					}
					include 'view/admin/news/add.php';
					break;
				case 'edit':
					# code...
					if (!isset($_SESSION['login'])) {
						header("Location: admin.php?controller=users&action=login");
					}
					$id = isset($_GET['id'])?$_GET['id']:"";
					$newsModel = new NewsModel();
					$newEdit = $newsModel->getNewsInfo($id);
					if (isset($_POST['edit'])) {
						$title = $_POST['title'];
						$newsModel = new NewsModel();
						if ($newsModel->edit($id, $title) === TRUE) {
							header("Location: admin.php?controller=news&action=list");
						}
					}
					include 'view/admin/news/edit.php';

					break;
				case 'delete':
					$id = isset($_GET['id'])?$_GET['id']:"";
					if (!empty($id)) {
						$newsModel = new NewsModel();
						if ($newsModel->deleteNews($id) === TRUE) {
							header("Location: admin.php?controller=news&action=list");
						}
					} else {
						echo "id nay khong ton tai";
					}
					# code...
					break;
				default:
					$newsModel = new NewsModel();
					$listNews = $newsModel->listNews();
					include 'view/admin/news/list.php';
					break;
			}
		}
		public function handleProduct($action) {
			echo $action;
		}
		public function handleUsers($action) {
			switch ($action) {
				case 'login':
					if (isset($_POST['login'])) {
						$username = $_POST['username'];
						$password = md5($_POST['password']);
						$newsModel = new NewsModel();
						if (!empty($newsModel->login($username, $password))) {
							$_SESSION['login'] = $username;
							header("Location: admin.php?controller=news&action=list");
						}
					}
					include 'view/admin/users/login.php';
					break;
				case 'logout':
					unset($_SESSION['login']);
					header("Location: admin.php?controller=users&action=login");
					break;
			}
		}
	}
?>