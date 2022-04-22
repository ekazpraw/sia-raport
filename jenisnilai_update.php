<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$id_jenisnilai = $_POST['id_jenisnilai'];
$jenis_nilai = $_POST['jenis_nilai'];
$edit = mysql_query("update jenis_nilai set nama_jenisnilai='$jenis_nilai' where id_jenisnilai='$id_jenisnilai'");
if($edit){
echo "<script>
alert('Data Berhasil di Edit');
window.location.href='jenisnilai_tampil.php';
</script>";
}else{
echo "gagal";
}
?>