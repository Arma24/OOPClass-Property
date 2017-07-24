<?php 

// nama class
class Air_minum {
 
	// property
	public $jumlah;
	public $jumlahkosong;
	public $merk;
	public $jenis;

}

$air_minum = new Air_minum();

// memberikan nilai pada property
$air_minum->jumlah = 3;
$air_minum->jumlahkosong = 2;
$air_minum->merk = "Club";
$air_minum->jenis = "Galon";

// mencetak hasil
echo "Jumlah air minum : ".$air_minum->jumlah."<br>";
echo "Jumlah air minum yang kosong : ".$air_minum->jumlahkosong."<br>";
echo "Merk : ".$air_minum->merk."<br>";
echo "Jenis : ".$air_minum->jenis."<br>";

?>