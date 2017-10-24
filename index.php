<!DOCTYPE html>
<html>
<head>
	<title>ALI ILHAM</title>
</head>
<body>
<?php
require_once 'coba1.php';

$manusia = new biodata ('ali','Bandung','XI RPl 1','Jomblo');

 	echo "<center><br>Nama Saya..".$manusia->get_nama();
 	echo "<br>Tempat Lahir..".$manusia->get_tempat_lahir();
 	echo "<br>Kelas..".$manusia->get_kelas();
 ?>
</body>
</html>