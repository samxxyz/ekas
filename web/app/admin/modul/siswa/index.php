<?php 

include 'fungsi/sesi.php';

$nama_app = " | E-Kas";
$modul = (isset($_GET['s']))?$_GET['s']:"awal";
switch ($modul) {
	case 'awal': $judul = "Data Siswa $nama_app"; include 'page.php'; break;
	

}




 ?>