<?php
	
	function rupiah ($nilai, $pecahan = 0){
		return number_format($nilai, $pecahan, ',', '.');
	}

	// konversi sederahana
	echo rupiah(500000); //akan tampil 500.000
	echo "<br> <br>";

	//konversi dengan nilai pecahan
	//2 menandakan dua digit di belakang koma
	echo "Rp ", rupiah(500000, 2); //akan tampil Rp500.000,00

?>