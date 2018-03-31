<!DOCTYPE html>
<html>
	<head>
		<title>Input Data Mahasiswa</title>
	</head>

	<body>
		<form action="" method="POST" name="frinput">
			NIM<br>
			<input type="text" size="35" name="nim"><br>

			Nama Mahasiswa<br>
			<input type="text" size="35" name="nama_mhs"><br>

			Jenis Kelamin<br>
			<input type="radio" name="jnskel" value="L">Laki-laki &nbsp; <input type="radio" name="jnskel" value="P">Perempuan<br>

			Tempat, Tanggal Lahir<br>
			<input type="text" size="20" name="tmp_lahir">
			<input type="text" size="10" name="tgl_lahir"><br>

			Program Studi<br>
			<select name="prodi">
				<option value="D2 Teknik Informatika">D2 Teknik Informatika
				<option value="D2 Teknik Mesin">D2 Teknik Mesin
				<option value="D2 Teknik Kimia">D2 Teknik Kimia
			</select><br>

			Alamat<br>
			<textarea name="alamat" rows="5" cols="20"></textarea><br>

			Kota<br>
			<input list="kota" name="kota">
			<datalist id="kota">
				<option value="Pekalongan">
				<option value="Batang">
				<option value="Pemalang">
				<option value="Tegal">
			</datalist><br><br>

			<input type="submit" name="Input" value="Input">
		</form>
	</body>
</html>

<?php
	if (isset($_POST['Input'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama_mhs'];
		$jnskel = $_POST['jnskel'];
		$tempat = $_POST['tmp_lahir'];
		$tgl = $_POST['tgl_lahir'];
		$prodi = $_POST['prodi'];
		$alamat = $_POST['alamat'];
		$kota = $_POST['kota'];

		echo "NIM : $nim<br>";
		echo "Nama : $nama<br>";
		echo "Jenis Kelamin : $jnskel<br>";
		echo "Tempat, tanggal lahir : $tempat , $tgl<br>";
		echo "Prodi : $prodi<br>";
		echo "ALamat : $alamat<br>";
		echo "Kota : $kota<br>";
	}

?>