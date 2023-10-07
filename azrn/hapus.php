<?php 
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM tb_data WHERE id='$id'");
 
header("location:index.php");

?>