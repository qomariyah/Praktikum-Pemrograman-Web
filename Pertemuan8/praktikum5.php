<!DOCTYPE html>
<html>
	<head>
		<title>Praktikum 5</title>
	</head>
	<body>
		<form method="POST" action="" name="frinput">
			ID Pegawai<br>
			<input type="text" size="35" name="id"><br><br>
			Nama Pegawai<br>
			<input type="text" size="35" name="nama"><br><br>
			Jenis Kelamin<br>
			<input type="radio" name="jnskel" value="Laki-Laki">Laki-laki &nbsp; <input type="radio" name="jnskel" value="Perempuan">Perempuan<br><br>
			Lama Bekerja<br>
			<input type="text" size="25" name="lamabekerja"> &nbsp; Tahun<br><br>
			Pendidikan<br>
			<select name="pend">
				<option value="">--- Pilih Jenjang Pendidikan ---</option>
				<option value="D2">D2</option>
				<option value="D3">D3</option>
				<option value="S1">S1</option>
			</select><br><br>
			Status Menikah<br>
			<select name="status">
				<option value="">--- Pilih Status ---</option>
				<option value="Belum Menikah">Belum Menikah</option>
				<option value="Sudah Menikah">Sudah Menikah</option>
			</select><br><br>
			Gaji Pokok<br>
			<input type="text" size="35" name="gaji"><br><br>
			<input type="submit" name="input" value="Input"><br>
		</form>
	</body>
</html>


<?php

	if (isset($_POST['input'])) {
		$idpegawai = $_POST['id'];
		$nama = $_POST['nama'];
		$jnskel = $_POST['jnskel'];
		$lama = $_POST['lamabekerja'];
		$pend = $_POST['pend'];
		$status = $_POST['status'];
		$gaji = $_POST['gaji'];

		if ($lama < 3){
			$gaji = 1600000;
		}else if ($lama >= 3 || $lama <= 7){
			$gaji = 2200000;
		}else if ($lama > 7){
			$gaji = 2700000;
		}

		if ($pend == "S1"){
			$gaji = $gaji + 400000;
		}

		if ($status == "Sudah Menikah"){
			$gaji = $gaji + 200000;
		}

		$gaji = $gaji - (0.04 * $gaji);

		echo "ID. Peg = $idpegawai <br>";
		echo "Nama Pegawai = $nama <br>";
		echo "Jenis Kelamin = $jnskel <br>";
		echo "Lama Bekerja = $lama tahun <br>";
		echo "Pendidikan = $pend <br>";
		echo "Status Menikah = $status <br>";
		echo "Gaji Pokok = $gaji <br>";
	}

?>