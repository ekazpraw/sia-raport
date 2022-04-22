<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$id_mapel = $_POST['id_mapel'];
$mata_pelajaran = $_POST['nama_mapel'];
$kkm = $_POST['kkm'];
$id_guru = $_POST['id_guru'];
$edit = mysql_query("update mata_pelajaran set nama_mapel='$mata_pelajaran', kkm='$kkm', 
id_guru='$id_guru' where id_mapel='$id_mapel'");
if($edit){
echo "<script>
alert('Data Berhasil di Edit');
window.location.href='mapel_tampil.php';
</script>";
}else{
echo "gagal";
}
?>