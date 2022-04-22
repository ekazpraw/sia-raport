<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$jenis_nilai = $_POST['jenis_nilai'];
$sql = mysql_query("insert into jenis_nilai(nama_jenisnilai)
values ('$jenis_nilai')");
if($sql){
echo "<script>
alert('Data Berhasil di Input');
window.location.href='jenisnilai_tampil.php';
</script>";
}else{
echo "gagal";
}
?>