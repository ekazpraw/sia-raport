<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$id_jenisabsen = $_POST['id_jenisabsen'];
$nama_jenisabsen = $_POST['nama_jenisabsen'];
$edit = mysql_query("update jenis_absen set nama_jenisabsen='$nama_jenisabsen' where id_jenisabsen='$id_jenisabsen'");
if($edit){
echo "<script>
alert('Data Berhasil di Edit');
window.location.href='jenisabsen_tampil.php';
</script>";
}else{
echo "gagal";
}
?>