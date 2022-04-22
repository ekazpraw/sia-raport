<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}	
$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$status = $_POST['status'];
$no_telp = $_POST['no_telp'];
$edit = mysql_query("update siswa set nama_siswa= '$nama_siswa', id_kelas= '$kelas', tempat_lahir= '$tempat_lahir', 
tanggal_lahir= '$tanggal_lahir', jenis_kelamin= '$jenis_kelamin', agama= '$agama', alamat= '$alamat', 
nama_ayah= '$nama_ayah', nama_ibu= '$nama_ibu', status='$status', no_telp= '$no_telp' where nis= '$nis'");
if($edit){
echo "<script>
alert('Data Berhasil di Edit');
window.location.href='siswa_tampil.php';
</script>";
}else{
echo "gagal";
}
?>