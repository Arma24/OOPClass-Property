<?php 

// nama class
class MejaMasAmirul {
 
	// property
	public $WarnaMejaMasAmirul;
	public $JumlahMejaMasAmirul;
	public $ukuranMejaMasAmirul;

}

$mejamasamirul = new MejaMasAmirul();

// memberikan nilai pada property
$mejamasamirul->WarnaMejaMasAmirul = "Putih";
$mejamasamirul->JumlahMejaMasAmirul = 1;
$mejamasamirul->ukuranMejaMasAmirul = "Besar";

// mencetak hasil
echo "Warna meja : ".$mejamasamirul->WarnaMejaMasAmirul."<br>";
echo "Jumlah meja : ".$mejamasamirul->JumlahMejaMasAmirul."<br>";
echo "Ukuran meja : ".$mejamasamirul->ukuranMejaMasAmirul."<br>";

?>