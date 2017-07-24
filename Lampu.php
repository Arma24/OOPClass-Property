<?php 

// nama class
class Lampu {
 
	// property
	public $JumlahLampu;
	public $NyalaLampu;
	public $MatiLampu;
	public $WarnaLampu;

}

$lampu = new Lampu();

// memberikan nilai pada property
$lampu->JumlahLampu = 3;
$lampu->NyalaLampu = 1;
$lampu->MatiLampu = 2;
$lampu->WarnaLampu = "Putih";

// mencetak hasil
echo "Jumlah lampu : ".$lampu->JumlahLampu."<br>";
echo "Jumlah lampu yang menyala : ".$lampu->NyalaLampu."<br>";
echo "Jumlah lampu yang mati : ".$lampu->MatiLampu."<br>";
echo "Warna lampu waktu menyala : ".$lampu->WarnaLampu."<br>";

?>