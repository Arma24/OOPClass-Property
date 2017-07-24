<?php 

// nama class
class Tas {
 
	// property
	public $jumlah;
	public $ukuran;

}

$tas = new Tas();

// memberikan nilai pada property
$tas->jumlah = 6;
$tas->ukuran = "Sedang";

// mencetak hasil
echo "Jumlah tas : ".$tas->jumlah."<br>";
echo "Ukuran : ".$tas->ukuran."<br>";

?>