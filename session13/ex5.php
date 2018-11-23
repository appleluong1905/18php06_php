<?php 
	function ex5($total) {
		// gia su so bi xanh la 50
		$blue = 50;
		// thi so bi do la 0
		$red = 0;
		// dem tung vien bi mot
		for ($i = 0; $i <= 50; $i++) {
			// neu thoa dieu kien 2/5 bi xanh va 3/4 bi do bang 27 thi ngung dem
			if (2/5*$blue + 3/4*$red == 27){
				// ngung dem, tuc la thoat vong lap for
				continue;
			}
			// giam tung vien bi xanh
			$blue--;
			// tang tung vien bi do
			$red++;
		}
		return "Chung ta co $blue bi xanh va $red bi do";

	}
	echo ex5(50);
?>