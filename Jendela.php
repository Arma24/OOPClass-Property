<?php 

// nama class
class Jendela {
 
	// property
	public $JumlahJendela;
	public $KeteranganJendela;

}

$jendela = new Jendela();

// memberikan nilai pada property
$jendela->JumlahJendela = 3;
$jendela->KeteranganJendela = "Tertutup semua";

// mencetak hasil
echo "Jumlah jendela : ".$jendela->JumlahJendela."<br>";
echo "Keterangan : ".$jendela->KeteranganJendela."<br>";

?>