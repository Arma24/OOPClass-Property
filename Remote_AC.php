<?php 

// nama class
class Remote_AC {
 
	// property
	public $warna;
	public $jumlah;
	public $merk;

}

$remote_AC = new Remote_AC();

// memberikan nilai pada property
$remote_AC->warna = "Putih";
$remote_AC->jumlah = 2;
$remote_AC->merk = "Toshiba";

// mencetak hasil
echo "Warna remote AC : ".$remote_AC->warna."<br>";
echo "Jumlah : ".$remote_AC->jumlah."<br>";
echo "Merk : ".$remote_AC->merk."<br>";

?>