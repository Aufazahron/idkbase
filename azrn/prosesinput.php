<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO tb_data SET nama = '$nama', kelas = '$kelas', alamat = '$alamat'";
mysqli_query($conn, $query);
header("location: index.php");
 ?>