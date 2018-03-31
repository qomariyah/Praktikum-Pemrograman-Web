<?php

	$id =
	$nama =
	$jk =
	$lama =
	$pendidikan =
	$status =
	$gaji =

	function gaji_pokok(){
		if ($lama < 3){
			$gaji = 1600000;
		}else if ($lama >= 3 && $lama <= 7){
			$gaji = 2200000;	
		}else if ($lama > 7){
			$gaji = 2700000;
		}
	}

	function intensif(){
		if ($pendidikan == 'S1'){
			
		}
	}

?>