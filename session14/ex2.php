<?php 
	$bi1 = 18;
	$bi2 = $bi1 * 2;
	$chuyen = 0;
	echo $bi1."<br>";
	echo $bi2;
	while ($bi1 != $bi2) {
		$bi2--;
		$bi1++;
		$chuyen++;

	}
	echo "<br>";
	echo "So lan chuyen bi la: ".$chuyen;
?>