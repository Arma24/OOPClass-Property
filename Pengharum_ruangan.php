<?php 

// nama class
class Pengharum_ruangan {
 
	// property
	public $merk;
	public $jumlah;
	public $tempat;

}

$pengharum_ruangan = new Pengharum_ruangan();

// memberikan nilai pada property
$pengharum_ruangan->merk = "Stella";
$pengharum_ruangan->jumlah = 2;
$pengharum_ruangan->tempat = "Di dekat AC";

// mencetak hasil
echo "Merk pengharum ruangan : ".$pengharum_ruangan->merk."<br>";
echo "Jumlah : ".$pengharum_ruangan->jumlah."<br>";
echo "Tempat : ".$pengharum_ruangan->tempat."<br>";

?>