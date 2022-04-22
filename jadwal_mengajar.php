<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
$id_guru = $_GET['id_guru'];
echo "<h1 class='page-header'><img src='images/mtsicon.jpg' width='50' height='50'>Jadwal Mengajar</h1>
<ol class='breadcrumb'>
<li>
 <i class='fa fa-dashboard'></i><img src='images/mtsicon.jpg' width='20' height='20'><a href='beranda.php'>Home</a>
</li>
<li class='active'>
<i class='fa fa-table'></i>Jadwal Mengajar
</li>
</ol>";
echo "Berikut adalah Jadwal Mengajar anda: ";
echo "<br><br>";
echo "<table class='table table-striped table-bordered table-hover'>
 <thead style='font-weight:bold'>
<tr>
<td><center>Hari/Jam</center></td>
<td><center>1-2</center></td>
<td><center>3-4</center></td>
<td><center>5-6</center></td>
<td><center>7-8</center></td>
<td><center>9-10</center></td>
</tr>
</thead>";
for($i=1;$i<=6;$i++){
$hari = $i;
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
echo "<tr>
<td>".$h."</td>";
$s2=mysql_query("select * from jadwal jdw
inner join mata_pelajaran mp on jdw.id_mapel = mp.id_mapel
inner join guru gr on mp.id_guru = gr.id_guru
inner join kelas kls on jdw.id_kelas = kls.id_kelas
where jdw.hari = '".$hari."' and gr.id_guru = '".$id_guru."'");
while($h2=mysql_fetch_array($s2)){
echo "<td align='center'>".$h2['nama_kelas']."<br>(".$h2['nama_mapel'].")</td>";
}
echo "<tr>";
}
echo "</table>";
?>
<?php include "footer.php"; ?>