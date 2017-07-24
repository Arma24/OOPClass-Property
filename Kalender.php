<?php 

// nama class
class Kalender {
 
	// property
	public $jumlah;
	public $tempat;

}

$kalender = new Kalender();

// memberikan nilai pada property
$kalender->jumlah = 2;
$kalender->tempat = "Didekat pintu dapur dan didekat pintu masuk";

// mencetak hasil
echo "Jumlah kalender : ".$kalender->jumlah."<br>";
echo "Tempat : ".$kalender->tempat."<br>";

?>