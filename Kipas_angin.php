<?php 

// nama class
class Kipas_angin {
 
	// property
	public $jumlah;
	public $jenis;
	public $tempat;

}

$kipas_angin = new Kipas_angin();

// memberikan nilai pada property
$kipas_angin->jumlah = 3;
$kipas_angin->jenis = "Kipas duduk";
$kipas_angin->tempat = "Di tempat sholat, di ruang Mbak Aul, dan di ruang belakang";

// mencetak hasil
echo "Jumlah kipas angin : ".$kipas_angin->jumlah."<br>";
echo "Jenis kipas angin : ".$kipas_angin->jenis."<br>";
echo "Tempat : ".$kipas_angin->tempat."<br>";

?>