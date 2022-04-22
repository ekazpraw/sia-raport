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
$jabatan = $_POST['id_jabatan'];
$pendidikan = $_POST['pendidikan'];
$id_kelas = $_POST['id_kelas'];
$input = mysql_query("insert into guru(id_guru,nama_guru,alamat_guru,tempat_lahir,tanggal_lahir,jenis_kelamin,agama,no_telp,id_jabatan,pendidikan,id_kelas) 
values ('$id_guru','$nama_guru','$alamat_guru','$tempat_lahir','$tanggal_lahir','$jenis_kelamin','$agama','$no_telp','$jabatan','$pendidikan','$id_kelas')");
if($input){
$input2 = mysql_query("insert into login(nama_lengkap, username, password, level)
values('$nama_guru','$id_guru','".md5($tanggal_lahir)."','guru')");
if($input2){
echo "<script>
alert('Data Berhasil di Input');
window.location.href='guru_tampil.php';
</script>";
}else{
echo "gagal input login";
}
}else{
echo "gagal";
}
?>