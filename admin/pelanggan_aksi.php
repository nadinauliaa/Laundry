<?php
include '../koneksi.php';

$nama= $_POST['nama'];
$hp= $_POST['hp'];
$alamat = $_POST['alamat'];

 
mysqli_query($koneksi, "INSERT INTO pelanggan VALUES('', '$nama', '$hp', '$alamat')");

echo "<script>alert('Data sudah diubah?'); window.location.href='pelanggan.php'</script>";
?>
