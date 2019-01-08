<?php 
	//	public, protected, private
	class User {
		var $name;
		var $bithday;

		protected function getName() {
			echo "My Name";
		}

		public function addUser() {
			echo "Add user";
		}

		public function deleteUser() {
			echo "Delete user";
		}
	}

	$user = new User();
	$user->getName();
	echo "<br>";

	class Student extends User {
		public function getIdStudent() {
			$this->getName();
			echo "234234234";
		}
	}

	$student = new Student();
	$student->getIdStudent();
	// echo "<br>";
	// $student->addUser();
	// echo "<br>";
	//$student->getName();

?>