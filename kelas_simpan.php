<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$kelas = $_POST['kelas'];
$sql = mysql_query("insert into kelas(nama_kelas)
values ('$kelas')");
if($sql){
echo "<script>
alert('Data Berhasil di Input');
window.location.href='kelas_tampil.php';
</script>";
}else{
echo "gagal";
}
?>