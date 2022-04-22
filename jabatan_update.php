<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$id_jabatan = $_POST['id_jabatan'];
$jabatan = $_POST['jabatan'];
$edit = mysql_query("update jabatan set nama_jabatan='$jabatan' where id_jabatan='$id_jabatan'");
if($edit){
echo "<script>
alert('Data Berhasil di Edit');
window.location.href='jabatan_tampil.php';
</script>";
}else{
echo "gagal";
}
?>