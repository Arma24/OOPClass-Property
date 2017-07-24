<?php 

// nama class
class Stopkontak {
 
	// property
	public $jumlah;
	public $jumlahcolokan;

}

$stopkontak = new Stopkontak();

// memberikan nilai pada property
$stopkontak->jumlah = 4;
$stopkontak->jumlahcolokan = 5;

// mencetak hasil
echo "Jumlah stopkontak: ".$stopkontak->jumlah."<br>";
echo "Jumlah colokan per stopkontak : ".$stopkontak->jumlahcolokan."<br>";

?>