<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$id_kelas = $_POST['id_kelas'];
$kelas = $_POST['kelas'];
$edit = mysql_query("update kelas set nama_kelas='$kelas' where id_kelas='$id_kelas'");
if($edit){
echo "<script>
alert('Data Berhasil di Edit');
window.location.href='kelas_tampil.php';
</script>";
}else{
echo "gagal";
}
?>