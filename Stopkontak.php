<?php 

// nama class
class Stopkontak {
 
	// property
	public $JumlahStopkontak;
	public $JumlahColokanStopkontak;

}

$stopkontak = new Stopkontak();

// memberikan nilai pada property
$stopkontak->JumlahStopkontak = 4;
$stopkontak->JumlahColokanStopkontak = 5;

// mencetak hasil
echo "Jumlah stopkontak: ".$stopkontak->JumlahStopkontak."<br>";
echo "Jumlah colokan per stopkontak : ".$stopkontak->JumlahColokanStopkontak."<br>";

?>