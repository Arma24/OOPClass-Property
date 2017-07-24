<?php 

// nama class
class Tas {
 
	// property
	public $JumlahTas;
	public $UkuranTas;

}

$tas = new Tas();

// memberikan nilai pada property
$tas->JumlahTas = 6;
$tas->UkuranTas = "Sedang";

// mencetak hasil
echo "Jumlah tas : ".$tas->JumlahTas."<br>";
echo "Ukuran : ".$tas->UkuranTas."<br>";

?>