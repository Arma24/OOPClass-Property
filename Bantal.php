<?php 

// nama class
class Bantal {
 
	// property
	public $jumlah;
	public $tempat;

}

$bantal = new Bantal();

// memberikan nilai pada property
$bantal->jumlah = 2;
$bantal->tempat = "Disamping saya";

// mencetak hasil
echo "Jumlah bantal : ".$bantal->jumlah."<br>";
echo "Tempat : ".$bantal->tempat."<br>";

?>