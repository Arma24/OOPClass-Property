<?php 

// nama class
class Bantal {
 
	// property
	public $JumlahBantal;
	public $TempatBantal;

}

$bantal = new Bantal();

// memberikan nilai pada property
$bantal->JumlahBantal = 2;
$bantal->TempatBantal = "Disamping saya";

// mencetak hasil
echo "Jumlah bantal : ".$bantal->JumlahBantal."<br>";
echo "Tempat : ".$bantal->TempatBantal."<br>";

?>