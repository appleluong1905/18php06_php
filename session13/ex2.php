<?php 
	function salary($salaryBase, $coefficient) {
		if ($coefficient < 3) {
			$salaryReal = ($salaryBase * $coefficient) * (100 + 20)/100;
		} else {
			$salaryReal = ($salaryBase * $coefficient) * (100 + 50)/100;
		}
		if ($salaryReal > 50000000) {
			echo "Luong $salaryReal la ban gioi day";
		} elseif ($salaryReal >= 5000000) {
			echo "Luong $salaryReal thi ban can go gang hon";
		} else {
			echo "Luong $salaryReal ^_^";
		}
	}
	salary(1350000, 4);
?>