<?php 

// nama class
class Lampu {
 
	// property
	public $jumlah;
	public $nyala;
	public $mati;
	public $warna;

}

$lampu = new Lampu();

// memberikan nilai pada property
$lampu->jumlah = 3;
$lampu->nyala = 1;
$lampu->mati = 2;
$lampu->warna = "Putih";

// mencetak hasil
echo "Jumlah lampu : ".$lampu->jumlah."<br>";
echo "Jumlah lampu yang menyala : ".$lampu->nyala."<br>";
echo "Jumlah lampu yang mati : ".$lampu->mati."<br>";
echo "Warna lampu waktu menyala : ".$lampu->warna."<br>";

?>