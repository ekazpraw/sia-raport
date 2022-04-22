<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$jabatan = $_POST['jabatan'];
$sql = mysql_query("insert into jabatan(nama_jabatan)
values ('$jabatan')");
if($sql){
echo "<script>
alert('Data Berhasil di Input');
window.location.href='jabatan_tampil.php';
</script>";
}else{
echo "gagal";
}
?>