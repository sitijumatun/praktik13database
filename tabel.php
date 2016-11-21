<?php
include "a.php";
$query="select * from mobil";
$hasil=mysql_query($query);
?>
<!DOCTYPE html>
<html>
<head>
	<title>TABEL DAFTAR MOBIL YANG ADA DI SHOWROOM</title>
</head>
<body>
<center><h3>DATA SHOWROOM MOBIL </h3></center>
<hr>
<center>
<table class="tablesorter" border="1" cellspacing="0" > 
			<thead> 
				<tr> 
    				<th>ID MOBIL</th> 
    				<th>MEREK</th> 
    				<th>MODEL</th> 
					<th>TIPE</th>
					<th>PINTU</th> 
    				<th>TAHUN PRODUKSI</th> 
					<th>NEGARA</th>
					<th>JENIS PRODUKSI</th>
					<th>AKSI</th>
				</tr> 
			</thead> 
			<tbody>
				<?php
				while ($data=mysql_fetch_array($hasil))
				{
				echo ("<tr> 
   					<td>$data[Id_mobil]</td> 
    				<td>$data[Merk]</td> 
    				<td>$data[Model]</td>
    				<td>$data[Tipe]</td> 
    				<td>$data[Pintu]</td> 
    				<td>$data[Tahun_Produksi]</td>
    				<td>$data[Negara_Pembuat]</td>
    				<td>$data[Jenis_Produksi]</td>    
					<td><a href='updatemobil.php?Id_mobil=".$data['Id_mobil']."'>Edit &nbsp</a><a href='deletemobil.php?Id_mobil=".$data['Id_mobil']."'>Delete</a> </td>
				</tr>");
				}
				?>
				</tbody>
				</table>
</center>
<hr>
<center><h3> SEARCHING DATA </h3></center>
<center>
	<form action="search.php" method="POST">
MASUKKAN KATA KUNCI MERK MOBIL : <input type="text" name="merk">
<input type="submit" name="submit" value="CARI">
</form>
</center>
<hr>
</body>
</html>