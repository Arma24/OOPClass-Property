<?php 

// nama class
class Meja_magang {
 
	// property
	public $gambar;
	public $jumlah;
	public $ukuran;

}

$mejamagang = new Meja_magang();

// memberikan nilai pada property
$mejamagang->gambar = "Thomas & Friends";
$mejamagang->jumlah = 2;
$mejamagang->ukuran = "Kecil";

// mencetak hasil
echo "Gambar meja : ".$mejamagang->gambar."<br>";
echo "Jumlah meja : ".$mejamagang->jumlah."<br>";
echo "Ukuran meja : ".$mejamagang->ukuran."<br>";

?>