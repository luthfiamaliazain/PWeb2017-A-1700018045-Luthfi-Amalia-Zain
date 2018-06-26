<h1 align="center"><br><br>NOTA PEMBAYARAN TIKET</h1>
<h1 align="center">===============================</h1>
<?php
	$nama1 = $_POST['field1'];
	$nama2 = $_POST['field2'];
	$noktp = $_POST['field3'];
	$harga;
	$jmlh_tkt = $_POST['jumlah'];
	$diskon;
	$tujuan = $_POST['tujuan'];
                    

     if ($tujuan=="Yogyakarta-Jakarta") {
         $harga = 800000;
     }
     elseif($tujuan=="Yogyakarta-Surabaya"){
        $harga = 400000;
     }
     elseif ($tujuan=="Yogyakarta-Bandung") {
        $harga = 650000;
     }
     elseif ($tujuan=="Jakarta-Yogyakarta") {
        $harga = 800000;
     }
     elseif ($tujuan == "Surabaya-Yogyakarta") {
        $harga = 400000;
     }
     elseif ($tujuan == "Bandung-Yogyakarta") {
        $harga = 650000;
     }

    $subtotal=0;
	$subtotal = $jmlh_tkt * $harga;
     if(isset($_POST['member'])){
         $_POST['member']=10/100;
         $diskon = $_POST['member'];
         $diskon = $diskon*$subtotal;
     }
     else{
         $_POST['member']=0;
         $diskon=$_POST['member'];
         $diskon=$diskon*$subtotal;
    }
	$totalbayar = $subtotal - $diskon;
                   
	echo '<div align="center">';	
	echo "<table border=0>";
	echo "<tr><td>Nama</td><td>:</td><td>$nama1 $nama2</td></tr>";
	echo "<tr><td>Nomor KTP</td><td>:</td><td> $noktp</td></tr>";
	echo "<tr><td>Tujuan</td><td>:</td><td>$tujuan</td></tr>";
	echo "<tr><td>Harga</td><td>:</td><td> $harga</td></tr>";
	echo "<tr><td>Jumlah tiket</td><td>:</td><td> $jmlh_tkt</td></tr>";
	echo "<tr><td>Diskon</td><td>:</td><td>$diskon</td></tr>";
	echo "<tr><td>Sub total</td><td>:</td><td> $subtotal</td></tr>";
	echo "<tr><td>Total bayar</td><td>:</td><td> $totalbayar</td></tr></div>";
	echo "</table>";
	echo "<br>";
	echo "<br>";
	echo '<div align="center"><input value="Cetak" type="button" onClick="window.print()"></div> ';
	echo '<div align="center"><a href="ngarep.html"><button>Selesai</button></a></div>';
?>
