<?php
	// Truyen vao 3 tham so: so thu nhat, so thu 2 va phep toan 
	function cal($a, $b, $cal) {
		if ($cal == '+') {
			return $a + $b;
		} elseif ($cal == '-') {
			return $a - $b;
		} elseif ($cal == '*') {
			return $a * $b;
		} else {
			return $a / $b;
		}
	}
	echo cal(4, 5, "+");
	echo "<br/>";
	echo cal(3, 5, "-");
	echo "<br/>";
	echo cal(3, 4, "*");
	echo "<br/>";
	echo cal(6, 2, "/");
?>