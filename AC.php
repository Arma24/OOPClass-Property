<?php 

// nama class
class AC {
 
	// property
	public $warna;
	public $jumlah;
	public $merk;

}

$ac = new AC();

// memberikan nilai pada property
$ac->warna = "Putih";
$ac->jumlah = 2;
$ac->merk = "Toshiba";

// mencetak hasil
echo "Warna AC : ".$ac->warna."<br>";
echo "Jumlah : ".$ac->jumlah."<br>";
echo "Merk : ".$ac->merk."<br>";

?>