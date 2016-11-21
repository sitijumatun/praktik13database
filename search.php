<?php
include "a.php";
$merk= $_POST['merk'];
$q = "SELECT * from mobil where merk like '%$merk%' "; 
    $result = mysql_query($q); 
    echo "<center>";
    echo "<h3> HASIL SEARCHING</h3>";
    echo "<hr>";
    echo "<table border='1' cellpadding='5' cellspacing='8'>";
    echo "
    <tr bgcolor='orange'>
  
    <td>ID MOBIL</td>
    <td>MEREK</td>
    <td>MODEL</td>
    <td>TIPE</td>
    <td>PINTU</td>
    <td>TAHUN PRODUKSI</td>
    <td>NEGARA</td>
    <td>JENIS PRODUKSI</td>
    </tr>";
    while ($data = mysql_fetch_array($result)) {  
    echo "
    <tr>
                    <td>$data[Id_mobil]</td> 
                    <td>$data[Merk]</td> 
                    <td>$data[Model]</td>
                    <td>$data[Tipe]</td> 
                    <td>$data[Pintu]</td> 
                    <td>$data[Tahun_Produksi]</td>
                    <td>$data[Negara_Pembuat]</td>
                    <td>$data[Jenis_Produksi]</td>   
    </tr>";
    }
    echo "</table>";
    ?>