<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$id = $_GET['id'];
$hapus = mysql_query("delete from guru where id_guru = '$id'");
if($hapus){
echo "<script>
alert('Data Berhasil di Hapus');
window.location.href='guru_tampil.php';
</script>";
}else{
echo "hapus gagal";
}
?>