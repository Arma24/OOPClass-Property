<?php 

// nama class
class Jam {
 
	// property
	public $WarnaJam;
	public $JumlahJam;
	public $UkuranJam;

}

$jam = new Jam();

// memberikan nilai pada property
$jam->WarnaJam = "Putih";
$jam->JumlahJam = 1;
$jam->UkuranJam = "Besar";

// mencetak hasil
echo "Warna jam : ".$jam->WarnaJam."<br>";
echo "Jumlah : ".$jam->JumlahJam."<br>";
echo "Ukuran : ".$jam->UkuranJam."<br>";

?>