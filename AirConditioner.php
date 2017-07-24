<?php 

// nama class
class AirConditioner {
 
	// property
	public $WarnaAirConditioner;
	public $JumlahAirConditioner;
	public $MerkAirConditioner;

}

$airconditioner = new AirConditioner();

// memberikan nilai pada property
$airconditioner->WarnaAirConditioner = "Putih";
$airconditioner->JumlahAirConditioner = 2;
$airconditioner->MerkAirConditioner = "Toshiba";

// mencetak hasil
echo "Warna Air Conditioner : ".$airconditioner->WarnaAirConditioner."<br>";
echo "Jumlah : ".$airconditioner->JumlahAirConditioner."<br>";
echo "Merk : ".$airconditioner->MerkAirConditioner."<br>";

?>