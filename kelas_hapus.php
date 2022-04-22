<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$id_kelas = $_GET['id'];
$hapus = mysql_query("delete from kelas where id_kelas = '$id_kelas'");
if($hapus){
echo "<script>
alert('Data Berhasil di Hapus');
window.location.href='kelas_tampil.php';
</script>";
}else{
echo "hapus gagal";
}
?>