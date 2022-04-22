<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$mata_pelajaran = $_POST['mata_pelajaran'];
$hari = $_POST['hari'];
$jam_ke = $_POST['jam_ke'];
$kelas = $_POST['kelas'];
$sql = mysql_query("insert into jadwal(id_mapel,hari,jam_ke,id_kelas)
values ('$mata_pelajaran','$hari','$jam_ke','$kelas')");
if($sql){
echo "<script>
alert('Data Berhasil di Input');
window.location.href='jadwal_tampil.php';
</script>";
}else{
echo "gagal";
}
?>