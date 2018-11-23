<?php 
	function ex6($total) {
		//Số bi màu đỏ chiếm 1/5 tổng số bi
		$red = 120*1/5;
		// số bi màu xanh chiếm 30% tổng số bi 
		$blue = 120*30/100;
		// so bi trang va vang la
		$whiteYellow = 120 - $red - $blue;
		// gia su so bi trang = tong so bi trang vang
		$white = $whiteYellow;
		// gia su so bi vang ban dau la 0
		$yellow = 0;
		// dem tung vien bi, dem cho den khi ti le bi trang bi vang la 3/7 thi dung
		do {
			$white--;
			$yellow++;
		} while (3*$white != 7*$yellow);
		return "Chung ta co $red bi do, $blue bi xanh, $white bi trang va $yellow bi vang";
	}
	echo ex6(120);
?>