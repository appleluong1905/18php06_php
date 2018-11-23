<?php 
	function ex4($money) {
		$candy = 0;
		$candyShell = 0;
		while ($money > 0) {
			// moi lan doi keo bang tien ton 200
			$money -= 200;
			// so keo tang len 1
			$candy++;
			// so vo tang len 1
			$candyShell++;
			// neu so vo keo bang 2 thi doi keo mot lan
			while ($candyShell == 2) {
				// so vo giam di 2
				$candyShell-=2;
				// so keo tang len 1
				$candy++;
				// so vo tang len 1
				$candyShell++;
			}
		}
		return $candy;
	}
	echo ex4(2000);
?>