<?php 

// nama class
class Jendela {
 
	// property
	public $jumlah;
	public $keterangan;

}

$jendela = new Jendela();

// memberikan nilai pada property
$jendela->jumlah = 3;
$jendela->keterangan = "Tertutup semua";

// mencetak hasil
echo "Jumlah : ".$jendela->jumlah."<br>";
echo "Keterangan : ".$jendela->keterangan."<br>";

?>