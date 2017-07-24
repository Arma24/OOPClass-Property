<?php 

// nama class
class RemoteAirConditioner {
 
	// property
	public $WarnaAirConditioner;
	public $JumlahAirConditioner;
	public $MerkAirConditioner;

}

$remoteairconditioner = new RemoteAirConditioner();

// memberikan nilai pada property
$remoteairconditioner->WarnaAirConditioner = "Putih";
$remoteairconditioner->JumlahAirConditioner = 2;
$remoteairconditioner->MerkAirConditioner = "Toshiba";

// mencetak hasil
echo "Warna remote air conditioner : ".$remoteairconditioner->WarnaAirConditioner."<br>";
echo "Jumlah : ".$remoteairconditioner->JumlahAirConditioner."<br>";
echo "Merk : ".$remoteairconditioner->MerkAirConditioner."<br>";

?>