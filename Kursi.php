<?php 

// nama class
class Kursi {
 
	// property
	public $WarnaKursi;
	public $Jumlah;

}

$kursi = new Kursi();

// memberikan nilai pada property
$kursi->WarnaKursi = "Hijau dan Putih";
$kursi->JumlahKursiHijau = 2;
$kursi->JumlahKursiPutih = 10;

// mencetak hasil
echo "Warna kursi : ".$kursi->WarnaKursi."<br>";
echo "Jumlah kursi hijau : ".$kursi->JumlahKursiHijau."<br>";
echo "Jumlah kursi putih : ".$kursi->JumlahKursiPutih."<br>";

?>