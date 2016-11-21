<?php 
include "a.php"; 
$mobil=$_POST['Id_mobil'];
$Merk=$_POST['Merk'];
$Model=$_POST['Model'];
$Tipe=$_POST['Tipe'];
$Pintu=$_POST['Pintu'];
$Tahun_Produksi=$_POST['Tahun_Produksi'];
$Negara_Pembuat=$_POST['Negara_Pembuat'];
$Jenis_Produksi=$_POST['Jenis_Produksi'];

$query = "UPDATE mobil SET Merk='$Merk', Model='$Model', Tipe='$Tipe', Pintu ='$Pintu', Tahun_Produksi='$Tahun_Produksi', Negara_Pembuat='$Negara_Pembuat', Jenis_Produksi='$Jenis_Produksi' WHERE Id_mobil='$mobil'"; 
$hasil = mysql_query($query);
 
if ($hasil) echo '<script language="javascript">alert("Anda berhasil mengedit data !"); document.location="tabel.php";</script>';
else echo "Pengeditan data gagal"; 

?>