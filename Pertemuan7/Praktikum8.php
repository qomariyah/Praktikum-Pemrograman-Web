<?php

	function info(){
		echo "Contoh Fungsi PHP<br>";
	}
	function luas_lingkaran ($jari){
		return 3.14 * $jari * $jari;
	}

	//pemanggilan fungsi

	info();

	$r = 10;
	echo "Luas lingkaran dengan jari-jari $r = ";
	echo luas_lingkaran($r);
	
?>