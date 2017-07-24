<?php 

// nama class
class Kasur {
 
	// property
	public $jumlah;
	public $ukuran;


}

$kasur = new Kasur();

// memberikan nilai pada property
$kasur->jumlah = 3;
$kasur->ukuran = "Sedang/Medium";

// mencetak hasil
echo "Jumlah kasur : ".$kasur->jumlah."<br>";
echo "Ukuran : ".$kasur->ukuran."<br>";

?>