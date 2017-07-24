<?php 

// nama class
class MejaMagang {
 
	// property
	public $GambarMejaMagang;
	public $JumlahMejaMagang;
	public $UkuranMejaMagang;

}

$mejamagang = new MejaMagang();

// memberikan nilai pada property
$mejamagang->GambarMejaMagang = "Thomas & Friends";
$mejamagang->JumlahMejaMagang = 2;
$mejamagang->UkuranMejaMagang = "Kecil";

// mencetak hasil
echo "Gambar meja : ".$mejamagang->GambarMejaMagang."<br>";
echo "Jumlah meja : ".$mejamagang->JumlahMejaMagang."<br>";
echo "Ukuran meja : ".$mejamagang->UkuranMejaMagang."<br>";

?>