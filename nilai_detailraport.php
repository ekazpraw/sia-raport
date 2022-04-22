<?php
session_start();
include "koneksi.php";
//jika belum login, akan dialihkan ke file index.php
if(empty($_SESSION['id_login'])){
header('location:index.php');
}
include "menu.php";
$kop = mysql_query("select * from siswa where nis");
$surat = mysql_fetch_array($kop);
echo "Nama Sekolah : MTS - AL FALAH
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;
Nama : ".$surat['nama_siswa']."
<br>Alamat Sekolah : JL. RAYA PAMULANG II / KP. MARUGA
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Nis : ".$surat['nis']."
</div>
</div>
</div><br>";
$nis = $_GET['id'];
$s = mysql_query("select * from siswa sis
inner join kelas kls
on sis.id_kelas=kls.id_kelas
inner join nilai nil
on sis.nis=nil.nis
where sis.nis='".$nis."'");
$t = mysql_query("select * from siswa sis
inner join kelas kls
on sis.id_kelas=kls.id_kelas
inner join absen abs
on sis.nis=abs.nis
where sis.nis='".$nis."'");
$u = mysql_query("select * from mata_pelajaran order by id_mapel");
$v = mysql_query("select * from siswa sis
inner join kelas kls
on sis.id_kelas=kls.id_kelas
inner join nilai nli
on sis.nis=nli.nis
where sis.nis='".$nis."'");
$h=mysql_fetch_array($s);
$a=mysql_fetch_array($t);
$m=mysql_fetch_array($u);
$x=mysql_fetch_array($v);
$i=1;
$j=1;
$k=1;
	$jumlah = $x['nilai_aqidah']+$x['nilai_mtk']+$x['nilai_bindo']+$x['nilai_pkn']+$x['nilai_barab']+$x['nilai_pai']+$x['nilai_fiqih']+$x['nilai_kimia']+$x['nilai_fisika']+$x['nilai_sosiologi']
	+$x['nilai_binggris']+$x['nilai_senbud']+$x['nilai_penjas']+$x['nilai_qurdits']+$x['nilai_ekonomi']+$x['nilai_biologi']+$x['nilai_geografi']+$x['nilai_plbj']+$x['nilai_ski']+$x['nilai_tik']
	+$x['tugas_harian']+$x['ulangan_praktik'];
	$rata = $jumlah/22;
$sikap1 = $x['nilai_aqidah'];
    if(($sikap1>=0) && ($sikap1<50))
	{$sikap1='E';}
	else if(($sikap1>=50) && ($sikap1<70))
	{$sikap1='D';}
	else if(($sikap1>=70) && ($sikap1<80))
	{$sikap1='C';}
	else if(($sikap1>=80) && ($sikap1<90))
	{$sikap1='B';}
	else if(($sikap1>=90) && ($sikap1<=100))
	{$sikap1='A';}
$sikap2 = $x['nilai_mtk'];
    if(($sikap2>=0) && ($sikap2<50))
	{$sikap2='E';}
	else if(($sikap2>=50) && ($sikap2<70))
	{$sikap2='D';}
	else if(($sikap2>=70) && ($sikap2<80))
	{$sikap2='C';}
	else if(($sikap2>=80) && ($sikap2<90))
	{$sikap2='B';}
	else if(($sikap2>=90) && ($sikap2<=100))
	{$sikap2='A';}
$sikap3 = $x['nilai_bindo'];
    if(($sikap3>=0) && ($sikap3<50))
	{$sikap3='E';}
	else if(($sikap3>=50) && ($sikap3<70))
	{$sikap3='D';}
	else if(($sikap3>=70) && ($sikap3<80))
	{$sikap3='C';}
	else if(($sikap3>=80) && ($sikap3<90))
	{$sikap3='B';}
	else if(($sikap3>=90) && ($sikap3<=100))
	{$sikap3='A';}
$sikap4 = $x['nilai_pkn'];
    if(($sikap4>=0) && ($sikap4<50))
	{$sikap4='E';}
	else if(($sikap4>=50) && ($sikap4<70))
	{$sikap4='D';}
	else if(($sikap4>=70) && ($sikap4<80))
	{$sikap4='C';}
	else if(($sikap4>=80) && ($sikap4<90))
	{$sikap4='B';}
	else if(($sikap4>=90) && ($sikap4<=100))
	{$sikap4='A';}
$sikap5 = $x['nilai_barab'];
    if(($sikap5>=0) && ($sikap5<50))
	{$sikap5='E';}
	else if(($sikap5>=50) && ($sikap5<70))
	{$sikap5='D';}
	else if(($sikap5>=70) && ($sikap5<80))
	{$sikap5='C';}
	else if(($sikap5>=80) && ($sikap5<90))
	{$sikap5='B';}
	else if(($sikap5>=90) && ($sikap5<=100))
	{$sikap5='A';}
$sikap6 = $x['nilai_pai'];
    if(($sikap6>=0) && ($sikap6<50))
	{$sikap6='E';}
	else if(($sikap6>=50) && ($sikap6<70))
	{$sikap6='D';}
	else if(($sikap6>=70) && ($sikap6<80))
	{$sikap6='C';}
	else if(($sikap6>=80) && ($sikap6<90))
	{$sikap6='B';}
	else if(($sikap6>=90) && ($sikap6<=100))
	{$sikap6='A';}
$sikap7 = $x['nilai_fiqih'];
    if(($sikap7>=0) && ($sikap7<50))
	{$sikap7='E';}
	else if(($sikap7>=50) && ($sikap7<70))
	{$sikap7='D';}
	else if(($sikap7>=70) && ($sikap7<80))
	{$sikap7='C';}
	else if(($sikap7>=80) && ($sikap7<90))
	{$sikap7='B';}
	else if(($sikap7>=90) && ($sikap7<=100))
	{$sikap7='A';}
$sikap8 = $x['nilai_kimia'];
    if(($sikap8>=0) && ($sikap8<50))
	{$sikap8='E';}
	else if(($sikap8>=50) && ($sikap8<70))
	{$sikap8='D';}
	else if(($sikap8>=70) && ($sikap8<80))
	{$sikap8='C';}
	else if(($sikap8>=80) && ($sikap8<90))
	{$sikap8='B';}
	else if(($sikap8>=90) && ($sikap8<=100))
	{$sikap8='A';}
$sikap9 = $x['nilai_fisika'];
    if(($sikap9>=0) && ($sikap9<50))
	{$sikap9='E';}
	else if(($sikap9>=50) && ($sikap9<70))
	{$sikap9='D';}
	else if(($sikap9>=70) && ($sikap9<80))
	{$sikap9='C';}
	else if(($sikap9>=80) && ($sikap9<90))
	{$sikap9='B';}
	else if(($sikap9>=90) && ($sikap9<=100))
	{$sikap9='A';}
$sikap10 = $x['nilai_sosiologi'];
    if(($sikap10>=0) && ($sikap10<50))
	{$sikap10='E';}
	else if(($sikap10>=50) && ($sikap10<70))
	{$sikap10='D';}
	else if(($sikap10>=70) && ($sikap10<80))
	{$sikap10='C';}
	else if(($sikap10>=80) && ($sikap10<90))
	{$sikap10='B';}
	else if(($sikap10>=90) && ($sikap10<=100))
	{$sikap10='A';}
$sikap11 = $x['nilai_binggris'];
    if(($sikap11>=0) && ($sikap11<50))
	{$sikap11='E';}
	else if(($sikap11>=50) && ($sikap11<70))
	{$sikap11='D';}
	else if(($sikap11>=70) && ($sikap11<80))
	{$sikap11='C';}
	else if(($sikap11>=80) && ($sikap11<90))
	{$sikap11='B';}
	else if(($sikap11>=90) && ($sikap11<=100))
	{$sikap11='A';}
$sikap12 = $x['nilai_senbud'];
    if(($sikap12>=0) && ($sikap12<50))
	{$sikap12='E';}
	else if(($sikap12>=50) && ($sikap12<70))
	{$sikap12='D';}
	else if(($sikap12>=70) && ($sikap12<80))
	{$sikap12='C';}
	else if(($sikap12>=80) && ($sikap12<90))
	{$sikap12='B';}
	else if(($sikap12>=90) && ($sikap12<=100))
	{$sikap12='A';}
$sikap13 = $x['nilai_penjas'];
    if(($sikap13>=0) && ($sikap13<50))
	{$sikap13='E';}
	else if(($sikap13>=50) && ($sikap13<70))
	{$sikap13='D';}
	else if(($sikap13>=70) && ($sikap13<80))
	{$sikap13='C';}
	else if(($sikap13>=80) && ($sikap13<90))
	{$sikap13='B';}
	else if(($sikap13>=90) && ($sikap13<=100))
	{$sikap13='A';}
$sikap14 = $x['nilai_qurdits'];
    if(($sikap14>=0) && ($sikap14<50))
	{$sikap14='E';}
	else if(($sikap14>=50) && ($sikap14<70))
	{$sikap14='D';}
	else if(($sikap14>=70) && ($sikap14<80))
	{$sikap14='C';}
	else if(($sikap14>=80) && ($sikap14<90))
	{$sikap14='B';}
	else if(($sikap14>=90) && ($sikap14<=100))
	{$sikap14='A';}
$sikap15 = $x['nilai_ekonomi'];
    if(($sikap15>=0) && ($sikap15<50))
	{$sikap15='E';}
	else if(($sikap15>=50) && ($sikap15<70))
	{$sikap15='D';}
	else if(($sikap15>=70) && ($sikap15<80))
	{$sikap15='C';}
	else if(($sikap15>=80) && ($sikap15<90))
	{$sikap15='B';}
	else if(($sikap15>=90) && ($sikap15<=100))
	{$sikap15='A';}
$sikap16 = $x['nilai_biologi'];
    if(($sikap16>=0) && ($sikap16<50))
	{$sikap16='E';}
	else if(($sikap16>=50) && ($sikap16<70))
	{$sikap16='D';}
	else if(($sikap16>=70) && ($sikap16<80))
	{$sikap16='C';}
	else if(($sikap16>=80) && ($sikap16<90))
	{$sikap16='B';}
	else if(($sikap16>=90) && ($sikap16<=100))
	{$sikap16='A';}
$sikap17 = $x['nilai_geografi'];
    if(($sikap17>=0) && ($sikap17<50))
	{$sikap17='E';}
	else if(($sikap17>=50) && ($sikap17<70))
	{$sikap17='D';}
	else if(($sikap17>=70) && ($sikap17<80))
	{$sikap17='C';}
	else if(($sikap17>=80) && ($sikap17<90))
	{$sikap17='B';}
	else if(($sikap17>=90) && ($sikap17<=100))
	{$sikap17='A';}
$sikap18 = $x['nilai_plbj'];
    if(($sikap18>=0) && ($sikap18<50))
	{$sikap18='E';}
	else if(($sikap18>=50) && ($sikap18<70))
	{$sikap18='D';}
	else if(($sikap18>=70) && ($sikap18<80))
	{$sikap18='C';}
	else if(($sikap18>=80) && ($sikap18<90))
	{$sikap18='B';}
	else if(($sikap18>=90) && ($sikap18<=100))
	{$sikap18='A';}
$sikap19 = $x['nilai_ski'];
    if(($sikap19>=0) && ($sikap19<50))
	{$sikap19='E';}
	else if(($sikap19>=50) && ($sikap19<70))
	{$sikap19='D';}
	else if(($sikap19>=70) && ($sikap19<80))
	{$sikap19='C';}
	else if(($sikap19>=80) && ($sikap19<90))
	{$sikap19='B';}
	else if(($sikap19>=90) && ($sikap19<=100))
	{$sikap19='A';}
$sikap20 = $x['nilai_tik'];
    if(($sikap20>=0) && ($sikap20<50))
	{$sikap20='E';}
	else if(($sikap20>=50) && ($sikap20<70))
	{$sikap20='D';}
	else if(($sikap20>=70) && ($sikap20<80))
	{$sikap20='C';}
	else if(($sikap20>=80) && ($sikap20<90))
	{$sikap20='B';}
	else if(($sikap20>=90) && ($sikap20<=100))
	{$sikap20='A';}
$sikap21 = $x['tugas_harian'];
    if(($sikap21>=0) && ($sikap21<50))
	{$sikap21='E';}
	else if(($sikap21>=50) && ($sikap21<70))
	{$sikap21='D';}
	else if(($sikap21>=70) && ($sikap21<80))
	{$sikap21='C';}
	else if(($sikap21>=80) && ($sikap21<90))
	{$sikap21='B';}
	else if(($sikap21>=90) && ($sikap21<=100))
	{$sikap21='A';}
$sikap22 = $x['ulangan_praktik'];
    if(($sikap22>=0) && ($sikap22<50))
	{$sikap22='E';}
	else if(($sikap22>=50) && ($sikap22<70))
	{$sikap22='D';}
	else if(($sikap22>=70) && ($sikap22<80))
	{$sikap22='C';}
	else if(($sikap22>=80) && ($sikap22<90))
	{$sikap22='B';}
	else if(($sikap22>=90) && ($sikap22<=100))
	{$sikap22='A';}
$predikat1 = $x['nilai_aqidah'];
    if(($predikat1>=0) && ($predikat1<50))
	{$predikat1='GAGAL';}
	else if(($predikat1>=50) && ($predikat1<70))
	{$predikat1='KURANG TUNTAS';}
	else if(($predikat1>=70) && ($predikat1<80))
	{$predikat1='TUNTAS';}
	else if(($predikat1>=80) && ($predikat1<90))
	{$predikat1='SANGAT TUNTAS / BAIK';}
	else if(($predikat1>=90) && ($predikat1<=100))
	{$predikat1='ISTIMEWA';}
$predikat2 = $x['nilai_mtk'];
    if(($predikat2>=0) && ($predikat2<50))
	{$predikat2='GAGAL';}
	else if(($predikat2>=50) && ($predikat2<70))
	{$predikat2='KURANG TUNTAS';}
	else if(($predikat2>=70) && ($predikat2<80))
	{$predikat2='TUNTAS';}
	else if(($predikat2>=80) && ($predikat2<90))
	{$predikat2='SANGAT TUNTAS / BAIK';}
	else if(($predikat2>=90) && ($predikat2<=100))
	{$predikat2='ISTIMEWA';}
$predikat3 = $x['nilai_bindo'];
    if(($predikat3>=0) && ($predikat3<50))
	{$predikat3='GAGAL';}
	else if(($predikat3>=50) && ($predikat3<70))
	{$predikat3='KURANG TUNTAS';}
	else if(($predikat3>=70) && ($predikat3<80))
	{$predikat3='TUNTAS';}
	else if(($predikat3>=80) && ($predikat3<90))
	{$predikat3='SANGAT TUNTAS / BAIK';}
	else if(($predikat3>=90) && ($predikat3<=100))
	{$predikat3='ISTIMEWA';}
$predikat4 = $x['nilai_pkn'];
    if(($predikat4>=0) && ($predikat4<50))
	{$predikat4='GAGAL';}
	else if(($predikat4>=50) && ($predikat4<70))
	{$predikat4='KURANG TUNTAS';}
	else if(($predikat4>=70) && ($predikat4<80))
	{$predikat4='TUNTAS';}
	else if(($predikat4>=80) && ($predikat4<90))
	{$predikat4='SANGAT TUNTAS / BAIK';}
	else if(($predikat4>=90) && ($predikat4<=100))
	{$predikat4='ISTIMEWA';}
$predikat5 = $x['nilai_barab'];
    if(($predikat5>=0) && ($predikat5<50))
	{$predikat5='GAGAL';}
	else if(($predikat5>=50) && ($predikat5<70))
	{$predikat5='KURANG TUNTAS';}
	else if(($predikat5>=70) && ($predikat5<80))
	{$predikat5='TUNTAS';}
	else if(($predikat5>=80) && ($predikat5<90))
	{$predikat5='SANGAT TUNTAS / BAIK';}
	else if(($predikat5>=90) && ($predikat5<=100))
	{$predikat5='ISTIMEWA';}
$predikat6 = $x['nilai_pai'];
    if(($predikat6>=0) && ($predikat6<50))
	{$predikat6='GAGAL';}
	else if(($predikat6>=50) && ($predikat6<70))
	{$predikat6='KURANG TUNTAS';}
	else if(($predikat6>=70) && ($predikat6<80))
	{$predikat6='TUNTAS';}
	else if(($predikat6>=80) && ($predikat6<90))
	{$predikat6='SANGAT TUNTAS / BAIK';}
	else if(($predikat6>=90) && ($predikat6<=100))
	{$predikat6='ISTIMEWA';}
$predikat7 = $x['nilai_fiqih'];
    if(($predikat7>=0) && ($predikat7<50))
	{$predikat7='GAGAL';}
	else if(($predikat7>=50) && ($predikat7<70))
	{$predikat7='KURANG TUNTAS';}
	else if(($predikat7>=70) && ($predikat7<80))
	{$predikat7='TUNTAS';}
	else if(($predikat7>=80) && ($predikat7<90))
	{$predikat7='SANGAT TUNTAS / BAIK';}
	else if(($predikat7>=90) && ($predikat7<=100))
	{$predikat7='ISTIMEWA';}
$predikat8 = $x['nilai_kimia'];
    if(($predikat8>=0) && ($predikat8<50))
	{$predikat8='GAGAL';}
	else if(($predikat8>=50) && ($predikat8<70))
	{$predikat8='KURANG TUNTAS';}
	else if(($predikat8>=70) && ($predikat8<80))
	{$predikat8='TUNTAS';}
	else if(($predikat8>=80) && ($predikat8<90))
	{$predikat8='SANGAT TUNTAS / BAIK';}
	else if(($predikat8>=90) && ($predikat8<=100))
	{$predikat8='ISTIMEWA';}
$predikat9 = $x['nilai_fisika'];
    if(($predikat9>=0) && ($predikat9<50))
	{$predikat9='GAGAL';}
	else if(($predikat9>=50) && ($predikat9<70))
	{$predikat9='KURANG TUNTAS';}
	else if(($predikat9>=70) && ($predikat9<80))
	{$predikat9='TUNTAS';}
	else if(($predikat9>=80) && ($predikat9<90))
	{$predikat9='SANGAT TUNTAS / BAIK';}
	else if(($predikat9>=90) && ($predikat9<=100))
	{$predikat9='ISTIMEWA';}
$predikat10 = $x['nilai_sosiologi'];
    if(($predikat10>=0) && ($predikat10<50))
	{$predikat10='GAGAL';}
	else if(($predikat10>=50) && ($predikat10<70))
	{$predikat10='KURANG TUNTAS';}
	else if(($predikat10>=70) && ($predikat10<80))
	{$predikat10='TUNTAS';}
	else if(($predikat10>=80) && ($predikat10<90))
	{$predikat10='SANGAT TUNTAS / BAIK';}
	else if(($predikat10>=90) && ($predikat10<=100))
	{$predikat10='ISTIMEWA';}
$predikat11 = $x['nilai_binggris'];
    if(($predikat11>=0) && ($predikat11<50))
	{$predikat11='GAGAL';}
	else if(($predikat11>=50) && ($predikat11<70))
	{$predikat11='KURANG TUNTAS';}
	else if(($predikat11>=70) && ($predikat11<80))
	{$predikat11='TUNTAS';}
	else if(($predikat11>=80) && ($predikat11<90))
	{$predikat11='SANGAT TUNTAS / BAIK';}
	else if(($predikat11>=90) && ($predikat11<=100))
	{$predikat11='ISTIMEWA';}
$predikat12 = $x['nilai_senbud'];
    if(($predikat12>=0) && ($predikat12<50))
	{$predikat12='GAGAL';}
	else if(($predikat12>=50) && ($predikat12<70))
	{$predikat12='KURANG TUNTAS';}
	else if(($predikat12>=70) && ($predikat12<80))
	{$predikat12='TUNTAS';}
	else if(($predikat12>=80) && ($predikat12<90))
	{$predikat12='SANGAT TUNTAS / BAIK';}
	else if(($predikat12>=90) && ($predikat12<=100))
	{$predikat12='ISTIMEWA';}
$predikat13 = $x['nilai_penjas'];
    if(($predikat13>=0) && ($predikat13<50))
	{$predikat13='GAGAL';}
	else if(($predikat13>=50) && ($predikat13<70))
	{$predikat13='KURANG TUNTAS';}
	else if(($predikat13>=70) && ($predikat13<80))
	{$predikat13='TUNTAS';}
	else if(($predikat13>=80) && ($predikat13<90))
	{$predikat13='SANGAT TUNTAS / BAIK';}
	else if(($predikat13>=90) && ($predikat13<=100))
	{$predikat13='ISTIMEWA';}
$predikat14 = $x['nilai_qurdits'];
    if(($predikat14>=0) && ($predikat14<50))
	{$predikat14='GAGAL';}
	else if(($predikat14>=50) && ($predikat14<70))
	{$predikat14='KURANG TUNTAS';}
	else if(($predikat14>=70) && ($predikat14<80))
	{$predikat14='TUNTAS';}
	else if(($predikat14>=80) && ($predikat14<90))
	{$predikat14='SANGAT TUNTAS / BAIK';}
	else if(($predikat14>=90) && ($predikat14<=100))
	{$predikat14='ISTIMEWA';}
$predikat15 = $x['nilai_ekonomi'];
    if(($predikat15>=0) && ($predikat15<50))
	{$predikat15='GAGAL';}
	else if(($predikat15>=50) && ($predikat15<70))
	{$predikat15='KURANG TUNTAS';}
	else if(($predikat15>=70) && ($predikat15<80))
	{$predikat15='TUNTAS';}
	else if(($predikat15>=80) && ($predikat15<90))
	{$predikat15='SANGAT TUNTAS / BAIK';}
	else if(($predikat15>=90) && ($predikat15<=100))
	{$predikat15='ISTIMEWA';}
$predikat16 = $x['nilai_biologi'];
    if(($predikat16>=0) && ($predikat16<50))
	{$predikat16='GAGAL';}
	else if(($predikat16>=50) && ($predikat16<70))
	{$predikat16='KURANG TUNTAS';}
	else if(($predikat16>=70) && ($predikat16<80))
	{$predikat16='TUNTAS';}
	else if(($predikat16>=80) && ($predikat16<90))
	{$predikat16='SANGAT TUNTAS / BAIK';}
	else if(($predikat16>=90) && ($predikat16<=100))
	{$predikat16='ISTIMEWA';}
$predikat17 = $x['nilai_geografi'];
    if(($predikat17>=0) && ($predikat17<50))
	{$predikat17='GAGAL';}
	else if(($predikat17>=50) && ($predikat17<70))
	{$predikat17='KURANG TUNTAS';}
	else if(($predikat17>=70) && ($predikat17<80))
	{$predikat17='TUNTAS';}
	else if(($predikat17>=80) && ($predikat17<90))
	{$predikat17='SANGAT TUNTAS / BAIK';}
	else if(($predikat17>=90) && ($predikat17<=100))
	{$predikat17='ISTIMEWA';}
$predikat18 = $x['nilai_plbj'];
    if(($predikat18>=0) && ($predikat18<50))
	{$predikat18='GAGAL';}
	else if(($predikat18>=50) && ($predikat18<70))
	{$predikat18='KURANG TUNTAS';}
	else if(($predikat18>=70) && ($predikat18<80))
	{$predikat18='TUNTAS';}
	else if(($predikat18>=80) && ($predikat18<90))
	{$predikat18='SANGAT TUNTAS / BAIK';}
	else if(($predikat18>=90) && ($predikat18<=100))
	{$predikat18='ISTIMEWA';}
$predikat19 = $x['nilai_ski'];
    if(($predikat19>=0) && ($predikat19<50))
	{$predikat19='GAGAL';}
	else if(($predikat19>=50) && ($predikat19<70))
	{$predikat19='KURANG TUNTAS';}
	else if(($predikat19>=70) && ($predikat19<80))
	{$predikat19='TUNTAS';}
	else if(($predikat19>=80) && ($predikat19<90))
	{$predikat19='SANGAT TUNTAS / BAIK';}
	else if(($predikat19>=90) && ($predikat19<=100))
	{$predikat19='ISTIMEWA';}
$predikat20 = $x['nilai_tik'];
    if(($predikat20>=0) && ($predikat20<50))
	{$predikat20='GAGAL';}
	else if(($predikat20>=50) && ($predikat20<70))
	{$predikat20='KURANG TUNTAS';}
	else if(($predikat20>=70) && ($predikat20<80))
	{$predikat20='TUNTAS';}
	else if(($predikat20>=80) && ($predikat20<90))
	{$predikat20='SANGAT TUNTAS / BAIK';}
	else if(($predikat20>=90) && ($predikat20<=100))
	{$predikat20='ISTIMEWA';}
$predikat21 = $x['tugas_harian'];
    if(($predikat21>=0) && ($predikat21<50))
	{$predikat21='GAGAL';}
	else if(($predikat21>=50) && ($predikat21<70))
	{$predikat21='KURANG TUNTAS';}
	else if(($predikat21>=70) && ($predikat21<80))
	{$predikat21='TUNTAS';}
	else if(($predikat21>=80) && ($predikat21<90))
	{$predikat21='SANGAT TUNTAS / BAIK';}
	else if(($predikat21>=90) && ($predikat21<=100))
	{$predikat21='ISTIMEWA';}
$predikat22 = $x['ulangan_praktik'];
    if(($predikat22>=0) && ($predikat22<50))
	{$predikat22='GAGAL';}
	else if(($predikat22>=50) && ($predikat22<70))
	{$predikat22='KURANG TUNTAS';}
	else if(($predikat22>=70) && ($predikat22<80))
	{$predikat22='TUNTAS';}
	else if(($predikat22>=80) && ($predikat22<90))
	{$predikat22='SANGAT TUNTAS / BAIK';}
	else if(($predikat22>=90) && ($predikat22<=100))
	{$predikat22='ISTIMEWA';}
echo "<form method='post' action=''>
	<table width='100%' border='1' cellspacing='5' cellpadding='5'>
  <tr>
    <td width='10' rowspan='3'><div align='center'>NO.</div></td>
    <td width='10' rowspan='3'><div align='center'>MATA PELAJARAN</div></td>
    <td width='10' rowspan='3'><div align='center'>KKM</div></td>
    <td colspan='3'><div align='center'>NILAI HASIL BELAJAR</div></td>
    <td width='10' rowspan='3'><div align='center'>PREDIKAT</div></td>
  </tr>
  <tr>
    <td colspan='2'><div align='center'>PENGETAHUAN</div></td>
    <td width='10'><div align='center'>SIKAP</div></td>
  </tr>
  <tr>
    <td width='10'><div align='center'>NILAI</div></td>
    <td width='10'><div align='center'>HURUF</div></td>
    <td><div align='center'>PREDIKAT</div></td>
  </tr>
  <tr>
    <td colspan='3'><div align='center'>BIDANG STUDI:</div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
	<td><div align='center'>AQIDAH AKHLAK:</div></td>
	<td><div align='center'>".$m['kkm']."</div></td>
	<td><div align='center'>".$x['nilai_aqidah']."</div></td>
	<td><div align='center'>".$x['huruf_aqidah']."</div></td>
    <td><div align='center'>".$sikap1."</div></td>
    <td><div align='center'>".$predikat1."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>MTK:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_mtk']."</div></td>
    <td><div align='center'>".$x['huruf_mtk']."</div></td>
    <td><div align='center'>".$sikap2."</div></td>
    <td><div align='center'>".$predikat2."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>B.INDONESIA:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_bindo']."</div></td>
    <td><div align='center'>".$x['huruf_bindo']."</div></td>
    <td><div align='center'>".$sikap3."</div></td>
    <td><div align='center'>".$predikat3."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>PKN:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_pkn']."</div></td>
    <td><div align='center'>".$x['huruf_pkn']."</div></td>
    <td><div align='center'>".$sikap4."</div></td>
    <td><div align='center'>".$predikat4."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>B.ARAB:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_barab']."</div></td>
    <td><div align='center'>".$x['huruf_barab']."</div></td>
    <td><div align='center'>".$sikap5."</div></td>
    <td><div align='center'>".$predikat5."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>P. AGAMA ISLAM:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_pai']."</div></td>
    <td><div align='center'>".$x['huruf_pai']."</div></td>
    <td><div align='center'>".$sikap6."</div></td>
    <td><div align='center'>".$predikat6."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>FIQIH:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_fiqih']."</div></td>
    <td><div align='center'>".$x['huruf_fiqih']."</div></td>
    <td><div align='center'>".$sikap7."</div></td>
    <td><div align='center'>".$predikat7."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>KIMIA:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_kimia']."</div></td>
    <td><div align='center'>".$x['huruf_kimia']."</div></td>
    <td><div align='center'>".$sikap8."</div></td>
    <td><div align='center'>".$predikat8."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>FISIKA:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_fisika']."</div></td>
    <td><div align='center'>".$x['huruf_fisika']."</div></td>
    <td><div align='center'>".$sikap9."</div></td>
    <td><div align='center'>".$predikat9."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>SOSIOLOGI:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_sosiologi']."</div></td>
    <td><div align='center'>".$x['huruf_sosiologi']."</div></td>
    <td><div align='center'>".$sikap10."</div></td>
    <td><div align='center'>".$predikat10."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>B.INGGRIS:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_binggris']."</div></td>
    <td><div align='center'>".$x['huruf_binggris']."</div></td>
    <td><div align='center'>".$sikap11."</div></td>
    <td><div align='center'>".$predikat11."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>SENI BUDAYA:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_senbud']."</div></td>
    <td><div align='center'>".$x['huruf_senbud']."</div></td>
    <td><div align='center'>".$sikap12."</div></td>
    <td><div align='center'>".$predikat12."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>PENJASKES:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_penjas']."</div></td>
    <td><div align='center'>".$x['huruf_penjas']."</div></td>
    <td><div align='center'>".$sikap13."</div></td>
    <td><div align='center'>".$predikat13."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>AL-QURAN HADITS:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_qurdits']."</div></td>
    <td><div align='center'>".$x['huruf_qurdits']."</div></td>
    <td><div align='center'>".$sikap14."</div></td>
    <td><div align='center'>".$predikat14."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>EKONOMI:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_ekonomi']."</div></td>
    <td><div align='center'>".$x['huruf_ekonomi']."</div></td>
    <td><div align='center'>".$sikap15."</div></td>
    <td><div align='center'>".$predikat15."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>BIOLOGI:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_biologi']."</div></td>
    <td><div align='center'>".$x['huruf_biologi']."</div></td>
    <td><div align='center'>".$sikap16."</div></td>
    <td><div align='center'>".$predikat16."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>GEOGRAFI:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_geografi']."</div></td>
    <td><div align='center'>".$x['huruf_geografi']."</div></td>
    <td><div align='center'>".$sikap17."</div></td>
    <td><div align='center'>".$predikat17."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>PLBJ:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_plbj']."</div></td>
    <td><div align='center'>".$x['huruf_plbj']."</div></td>
    <td><div align='center'>".$sikap18."</div></td>
    <td><div align='center'>".$predikat18."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>SKI:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_ski']."</div></td>
    <td><div align='center'>".$x['huruf_ski']."</div></td>
    <td><div align='center'>".$sikap19."</div></td>
    <td><div align='center'>".$predikat19."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$i++."</div></td>
    <td><div align='center'>TIK:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['nilai_tik']."</div></td>
    <td><div align='center'>".$x['huruf_tik']."</div></td>
    <td><div align='center'>".$sikap20."</div></td>
    <td><div align='center'>".$predikat20."</div></td>
  </tr>
  <tr>
    <td colspan='3'><div align='center'>NILAI LAIN-LAIN</div></td>
    <td colspan='4'>&nbsp;</td>
  </tr>
  <tr>
    <td><div align='center'>".$j++."</div></td>
    <td><div align='center'>TEORI:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['tugas_harian']."</div></td>
    <td><div align='center'>".$x['huruf_tugas_harian']."</div></td>
    <td><div align='center'>".$sikap21."</div></td>
    <td><div align='center'>".$predikat21."</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$j++."</div></td>
    <td><div align='center'>PRAKTIK:</div></td>
    <td><div align='center'>".$m['kkm']."</div></td>
    <td><div align='center'>".$x['ulangan_praktik']."</div></td>
    <td><div align='center'>".$x['huruf_ulangan_praktik']."</div></td>
    <td><div align='center'>".$sikap22."</div></td>
    <td><div align='center'>".$predikat22."</div></td>
  </tr>
  <tr>
    <td colspan='2'><div align='center'>JUMLAH:</div></td>
    <td colspan='5'><div align='center'>".$jumlah."</div></td>
  </tr>
  <tr>
    <td colspan='2'><div align='center'>RATA-RATA:</div></td>
    <td colspan='5'><div align='center'>".$rata."</div></td>
  </tr>
</table>
<br>
<table width='40%' border='1' cellspacing='5' cellpadding='5'>
  <tr>
    <td colspan='3'><div align='center'>KETIDAKHADIRAN</div></td>
  </tr>
  <tr>
    <td width='17%'><div align='center'>".$k++."</div></td>
    <td width='56%'><div align='center'>Hadir</div></td>
    <td width='27%'><div align='center'>(".$a['totalabs_hadir'].") HARI</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$k++."</div></td>
    <td><div align='center'>Sakit</div></td>
    <td><div align='center'>(".$a['totalabs_sakit'].") HARI</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$k++."</div></td>
    <td><div align='center'>Alpa</div></td>
    <td><div align='center'>(".$a['totalabs_alpa'].") HARI</div></td>
  </tr>
  <tr>
    <td><div align='center'>".$k++."</div></td>
    <td><div align='center'>Libur</div></td>
    <td><div align='center'>(".$a['totalabs_libur'].") HARI</div></td>
  </tr>
</table>
<br>";?>
Tanda Tangan Orang Tua,
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Tanda Tangan Wali Murid,
<br><br><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
$sql = mysql_query("select * from guru where id_guru");
$hasil = mysql_fetch_array($sql);?>
<label><?php echo $hasil['nama_guru'];?></label><br>
(............................................)
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
NIP: <label><?php echo $hasil['id_guru'];?></label>
<script>window.print();</script>
<?php include "footer.php"; ?>