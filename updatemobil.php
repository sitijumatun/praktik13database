<?php 
        include "a.php";
        $query = "SELECT * FROM mobil WHERE Id_mobil= '".$_GET['Id_mobil']."'"; 
        $hasil = mysql_query($query);
		$data = mysql_fetch_array($hasil);
?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM MEMPERBAHARUI DATA</title>
</head>
<body>
<h3> SILAKAN PERBAHARUI DATA ANDA</h3>
<hr>
	<form action="updatemobilsrc.php" method="post">
		KODE MOBIL : <input type="text" name="Id_mobil"  value='<?php echo $data['Id_mobil'];?>' ><br/>
		MEREK : <input type="text" name="Merk" value='<?php echo $data['Merk'];?>' ><br/>
		MODEL : <input type="text" name="Model" value='<?php echo $data['Model'];?>' ><br/>
		TIPE : <input type="text" name="Tipe" value='<?php echo $data['Tipe'];?>' ><br/>
		PINTU : <input type="text" name="Pintu" value='<?php echo $data['Pintu'];?>' ><br/>
		TAHUN PRODUKSI : <input type="text" name="Tahun_Produksi" value='<?php echo $data['Tahun_Produksi'];?>' ><br/>
		NEGARA PEMBUAT : <input type="text" name="Negara_Pembuat" value='<?php echo $data['Negara_Pembuat'];?>' ><br/>
		JENIS PRODUKSI : <input type="text" name="Jenis_Produksi" value='<?php echo $data['Jenis_Produksi'];?>' ><br/>
		<input name="submit" type="submit" value="UPDATE" class="alt_btn">
				</div>
			</form>
</body>
</html>
