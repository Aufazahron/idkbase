<?php 
	$id = $_GET['id'];
	
	if ($id < 1) {
		header("location:index.php?id=1");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Azrn Database List</title>
</head>
<body>
	<form method="post" action="prosesinput.php">
		<input type="text" name="nama" placeholder="nama" required>
		<input type="text" name="kelas" placeholder="kelas" required>
		<input type="text" name="alamat" placeholder="alamat" required>
		<button type="submit">Kirim</button>
	</form>

	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Kelas</th>
			<th>Alamat</th>
			<th>Hapus?</th>
		</tr>
		<?php 
			include 'koneksi.php';
			$no = 1;
			$datab = mysqli_query($conn, "SELECT * FROM tb_data");
			while ($data = mysqli_fetch_array($datab)) {
		 ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $data['nama'] ?></td>
			<td><?php echo $data['kelas'] ?></td>
			<td><?php echo $data['alamat'] ?></td>
			<td><a href="hapus.php?id=<?php echo $data['id'] ?>">Hapus</a></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>