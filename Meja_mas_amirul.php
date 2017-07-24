<?php 

// nama class
class Meja_mas_amirul {
 
	// property
	public $warna;
	public $jumlah;
	public $ukuran;

}

$meja_mas_amirul = new Meja_mas_amirul();

// memberikan nilai pada property
$meja_mas_amirul->warna = "Putih";
$meja_mas_amirul->jumlah = 1;
$meja_mas_amirul->ukuran = "Besar";

// mencetak hasil
echo "Warna meja : ".$meja_mas_amirul->warna."<br>";
echo "Jumlah meja : ".$meja_mas_amirul->jumlah."<br>";
echo "Ukuran meja : ".$meja_mas_amirul->ukuran."<br>";

?>