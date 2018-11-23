<?php 
	function ex3() {
		// so keo ban dau la 0
		$candy = 0;
		// gia su do tien ban dau la 0
		$euroMoney = 0;
		$dolarMoney = 0;
		// dem so lan doi keo cua tung dong tien
		$chargeDolar = $chargeEuro = 0;
		// neu chua du 50 cai keo thi doi tiep
		while ($candy < 50) {
			// doi dolar thi ton 5$
			$dolarMoney-=5;
			// duoc 1 cai keo moi lan doi
			$candy++;
			// co them 3 euro sau moi lan doi keo bang dolar
			$euroMoney+=3;
			// so lan doi dolar dc tang them 1 lan
			$chargeDolar++;
			// Con tien euro la con doi
			while ($euroMoney > 0) {
				// doi euro thi ton 2 euro
				$euroMoney-=2;
				// moi lan doi euro dc tang 3 dolar
				$dolarMoney+=3;
				// tang keo len 1 sau moi lan doi
				$candy++;
				//so lan doi euro dc tang them 1 lan
				$chargeEuro++;
			}
		}
		return "Ban da ton ".$dolarMoney." de co duoc 50 cai keo".
			   " sau $chargeDolar lan doi dolar va $chargeEuro lan doi euro";
	}
	echo ex3();
?>