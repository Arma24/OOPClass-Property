<?php 

// nama class
class Motor {
 
	// property
	public $jumlah;
	public $jenis;

}

$motor = new Motor();

// memberikan nilai pada property
$motor->jumlah = 5;
$motor->jenis = "Metic dan bebek";

// mencetak hasil
echo "Jumlah motor : ".$motor->jumlah."<br>";
echo "Jenis : ".$motor->jenis."<br>";

?>