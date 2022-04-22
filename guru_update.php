<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$id_guru = $_POST['id_guru'];
$nama_guru = $_POST['nama_guru'];
$alamat_guru = $_POST['alamat_guru'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$no_telp = $_POST['no_telp'];
$id_jabatan = $_POST['id_jabatan'];
$pendidikan = $_POST['pendidikan'];
$id_kelas = $_POST['id_kelas'];
$edit = mysql_query("update guru set nama_guru= '$nama_guru', alamat_guru= '$alamat_guru',
tempat_lahir= '$tempat_lahir', tanggal_lahir= '$tanggal_lahir',
jenis_kelamin= '$jenis_kelamin', agama= '$agama', no_telp= '$no_telp',
id_jabatan = '$id_jabatan', pendidikan= '$pendidikan', id_kelas='$id_kelas'
where id_guru='$id_guru'");
if($edit){
echo "<script>
alert('Data Berhasil di Edit');
window.location.href='guru_tampil.php';
</script>";
}else{
echo "gagal";
}
?>