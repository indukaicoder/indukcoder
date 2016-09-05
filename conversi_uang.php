<?php 
	/*
		usage / cara pemakaian :
		conversi_uang(1000,"Rp");
		output = Rp 1.000
	*/
    function conversi_uang($int,$format){
		$l = strlen($int);

		$ratus 			= 3;			// ex : 100
		$ribu 			= 4;			// ex : 1000
		$puluhribu 		= 5; 			// ex : 10000
		$ratusribu 		= 6; 			// ex : 100000
		$juta 			= 7; 			// ex : 1000000
		$puluhjuta 		= 8; 			// ex : 10000000
		$ratusjuta 		= 9; 			// ex : 100000000
		$miliar 		= 10; 			// ex : 1000000000
		$puluhmiliar 	= 11; 			// ex : 10000000000
		$ratusmiliar 	= 12; 			// ex : 100000000000

		$result = "";

		if($l == $ribu){
			$result = substr($int, 0,1). ".". substr($int, 1,3);
		}elseif($l == $ratus){
			$result = substr($int, 0,3);
		}elseif($l == $puluhribu){
			$result = substr($int, 0,2). ".". substr($int, 2,3);
		}elseif($l == $ratusribu){
			$result = substr($int, 0,3). ".". substr($int, 3,3);
		}elseif($l == $juta){
			$result = substr($int, 0,1). ".". substr($int, 1,3). ".". substr($int, 4,3);
		}elseif($l == $puluhjuta){
			$result = substr($int, 0,2). ".". substr($int, 2,3). ".". substr($int, 5,3);
		}elseif($l == $ratusjuta){
			$result = substr($int, 0,3). ".". substr($int, 3,3). ".". substr($int, 6,3);
		}elseif($l == $miliar){
			$result = substr($int, 0,1). ".". substr($int, 1,3). ".". substr($int, 4,3). ".". substr($int, 7,3);
		}elseif($l == $puluhmiliar){
			$result = substr($int, 0,2). ".". substr($int, 2,3). ".". substr($int, 5,3). ".". substr($int, 8,3);
		}elseif($l == $ratusmiliar){
			$result = substr($int, 0,3). ".". substr($int, 3,3). ".". substr($int, 6,3). ".". substr($int, 9,3);
		}

		return $format." ".$result;
	}
?>
