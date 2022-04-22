<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$mata_pelajaran = $_POST['nama_mapel'];
$kkm = $_POST['kkm'];
$id_guru = $_POST['id_guru'];
$sql = mysql_query("insert into mata_pelajaran(nama_mapel, kkm, id_guru)
values ('$mata_pelajaran', '$kkm','$id_guru')");
if($sql){
echo "<script>
alert('Data Berhasil di Input');
window.location.href='mapel_tampil.php';
</script>";
}else{
echo "gagal";
}
?>