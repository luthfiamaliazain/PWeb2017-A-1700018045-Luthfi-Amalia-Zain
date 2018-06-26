<?php
	$a = $_POST['pilih'];

	if($a=="Pesawat")
		include("pesawat.php");
	elseif($a=="Kereta")
		include("kereta.php");
	elseif($a=="Bus")
		include("bus.php");

?>