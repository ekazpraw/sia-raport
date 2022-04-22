<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
?>
<h1 class="page-header">
<img src="images/mtsicon.jpg" width="50" height="50"><center>Jadwal Pelajaran MTS AL-FALAH<br>
Tahun Pelajaran 2017/2018</center>
</h1>
<a href='jadwal_tambah.php' class='btn btn-primary'>Tambah Jadwal</a>
<ol class="breadcrumb">
<li>
<i class="fa fa-dashboard"></i><img src="images/mtsicon.png" width="20" height="20"><a href="beranda.php"> Home</a>
</li>
<li class="active">
<i class="fa fa-table"></i> Jadwal Pelajaran
</li>
</ol>
<?php
for($a = 1; $a<7;$a++)
{
$hari = $a;
$sqlku = "select * , jadwal.id_kelas as id_kelas from jadwal 
inner join kelas on kelas.id_kelas = jadwal.id_kelas
where hari = '".$hari."' group by jadwal.id_kelas";
//cari kelas yang aktif di hari senin
$eksekusiku = mysql_query($sqlku);
switch($hari){
case 1:
$h ="Senin";
break;
case 2:
$h ="Selasa";
break;
case 3:
$h ="Rabu";
break;
case 4:
$h ="Kamis";
break;
case 5:
$h ="Jum'at";
break;
case 6:
$h ="Sabtu";
break;
}
echo "<table class='table table-striped table-bordered table-hover'>
<td>".$h."</td>
<tr>
<td><center>Kelas/Jam</center></td>
<td><center>1-2</center></td>
<td><center>3-4</center></td>
<td><center>5-6</center></td>
<td><center>7-8</center></td>
<td><center>9-10</center></td>
</tr>
</thead>";
while ($dataku = mysql_fetch_array($eksekusiku))
{
$id_kelas = $dataku['id_kelas']; 
echo "<tr>";
echo "<td>".$dataku['nama_kelas']."</td>";
for($i=1;$i<=5;$i++)
{
//echo "<td>".$i."</td>";
//cari jam aktif dari kelas di hari senin
$sqlku2 = "select * from jadwal 
inner join mata_pelajaran mapel on mapel.id_mapel = jadwal.id_mapel
inner join guru gr on mapel.id_guru=gr.id_guru
where hari = '".$hari."' and jadwal.id_kelas='".$id_kelas."' and jam_ke='".$i."'";
$eksekusiku2 = mysql_query($sqlku2);
$dataku2 = mysql_fetch_array($eksekusiku2);
$ketemu2 = mysql_num_rows($eksekusiku2);
if($ketemu2>0)
{
echo "<td>".$dataku2['nama_mapel']." (".$dataku2['nama_guru'].")"."</td>";
}
else
{
echo "<td>&nbsp;</td>";
}
}
echo "</tr>";
echo "<br>";
}
}
echo "</table>";
?>
<?php include "footer.php"; ?>