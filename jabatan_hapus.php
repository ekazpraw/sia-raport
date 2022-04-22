<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$id_jabatan = $_GET['id'];
$hapus = mysql_query("delete from jabatan where id_jabatan = '$id_jabatan'");
if($hapus){
echo "<script>
alert('Data Berhasil di Hapus');
window.location.href='jabatan_tampil.php';
</script>";
}else{
echo "hapus gagal";
}
?>