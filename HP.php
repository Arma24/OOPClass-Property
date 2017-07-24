<?php 

// nama class
class HP {
 
	// property
	public $jumlah;
	public $merk;

}

$hp = new HP();

// memberikan nilai pada property
$hp->jumlah = 4;
$hp->merk = "Xiaomi, Asus, Acer, Samsung";

// mencetak hasil
echo "Jumlah : ".$hp->jumlah."<br>";
echo "Merk : ".$hp->merk."<br>";

?>