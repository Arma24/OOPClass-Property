<?php 

// nama class
class AirMinum {
 
	// property
	public $JumlahAirMinum;
	public $JumlahAirMinumKosong;
	public $MerkAirMinum;
	public $JenisAirMinum;

}

$airminum = new AirMinum();

// memberikan nilai pada property
$airminum->JumlahAirMinum = 3;
$airminum->JumlahAirMinumKosong = 2;
$airminum->MerkAirMinum = "Club";
$airminum->JenisAirMinum = "Galon";

// mencetak hasil
echo "Jumlah air minum : ".$airminum->JumlahAirMinum."<br>";
echo "Jumlah air minum yang kosong : ".$airminum->JumlahAirMinumKosong."<br>";
echo "Merk : ".$airminum->MerkAirMinum."<br>";
echo "Jenis : ".$airminum->JenisAirMinum."<br>";

?>