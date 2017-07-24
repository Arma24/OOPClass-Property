<?php 

// nama class
class Botol_minum {
 
	// property
	public $jumlah;
	public $tempat;

}

$botol_minum = new Botol_minum();

// memberikan nilai pada property
$botol_minum->jumlah = 2;
$botol_minum->tempat = "Diatas meja";

// mencetak hasil
echo "Jumlah botol minum : ".$botol_minum->jumlah."<br>";
echo "Tempat : ".$botol_minum->tempat."<br>";

?>