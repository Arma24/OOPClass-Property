<?php 

// nama class
class Kursi {
 
	// property
	public $warna;
	public $jumlah;

}

$kursi = new Kursi();

// memberikan nilai pada property
$kursi->warna = "Hijau dan Putih";
$kursi->jumlahhijau = 2;
$kursi->jumlahputih = 10;

// mencetak hasil
echo "Warna kursi : ".$kursi->warna."<br>";
echo "Jumlah kursi hijau : ".$kursi->jumlahhijau."<br>";
echo "Jumlah kursi putih : ".$kursi->jumlahputih."<br>";

?>