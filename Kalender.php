<?php 

// nama class
class Kalender {
 
	// property
	public $JumlahKalender;
	public $TempatKalender;

}

$kalender = new Kalender();

// memberikan nilai pada property
$kalender->JumlahKalender = 2;
$kalender->TempatKalender = "Didekat pintu dapur dan didekat pintu masuk";

// mencetak hasil
echo "Jumlah kalender : ".$kalender->JumlahKalender."<br>";
echo "Tempat : ".$kalender->TempatKalender."<br>";

?>