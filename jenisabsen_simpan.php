<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$jenis_absen = $_POST['jenis_absen'];
$sql = mysql_query("insert into jenis_absen(nama_jenisabsen)
values ('$jenis_absen')");
if($sql){
echo "<script>
alert('Data Berhasil di Input');
window.location.href='jenisabsen_tampil.php';
</script>";
}else{
echo "gagal";
}
?>