<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
$nis = $_POST['nis'];
$nama_siswa = $_POST['nama_siswa'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$status = $_POST['status'];
$no_telp = $_POST['no_telp'];
$kelas = $_POST['kelas'];
$input = mysql_query("insert into siswa(nis, nama_siswa, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, agama, nama_ayah, nama_ibu, status, no_telp, id_kelas) 
values ('$nis', '$nama_siswa', '$alamat', '$tempat_lahir','$tanggal_lahir','$jenis_kelamin',
'$agama','$nama_ayah','$nama_ibu', '$status', '$no_telp', '$kelas')");
if($input){
//input data ke tabel login agar siswa bisa login dengan nis & tanggal lahir
$input2 = mysql_query("insert into login(nama_lengkap, username, password, level)
values('$nama_siswa','$nis','".md5($tanggal_lahir)."','siswa')");
if($input2){
echo "<script>
alert('Data Berhasil di Input');
window.location.href='siswa_tampil.php';
</script>";
}else{
echo "gagal input login";
}
}else{
echo "gagal";
}
?>