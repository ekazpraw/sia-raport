<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$id = $_GET['id'];
$hapus = mysql_query("delete from mata_pelajaran where id_mapel= '$id'");
if($hapus){
echo "<script>
alert('Data Berhasil di Hapus');
window.location.href='mapel_tampil.php';
</script>";
}else{
echo "hapus gagal";
}
?>