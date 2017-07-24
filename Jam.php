<?php 

// nama class
class Jam {
 
	// property
	public $warna;
	public $jumlah;
	public $ukuran;

}

$jam = new Jam();

// memberikan nilai pada property
$jam->warna = "Putih";
$jam->jumlah = 1;
$jam->ukuran = "Besar";

// mencetak hasil
echo "Warna jam : ".$jam->warna."<br>";
echo "Jumlah : ".$jam->jumlah."<br>";
echo "Ukuran : ".$jam->ukuran."<br>";

?>