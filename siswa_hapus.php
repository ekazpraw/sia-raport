<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$nis = $_GET['id'];
$hapus = mysql_query("delete from siswa where nis = '$nis'");
if($hapus){
echo "<script>
alert('Data Berhasil di Hapus');
window.location.href='siswa_tampil.php';
</script>";
}else{
echo "hapus gagal";
}
?>