<?php 

// nama class
class KipasAngin {
 
	// property
	public $JumlahKipasAngin;
	public $JenisKipasAngin;
	public $TempatKipasAngin;

}

$kipasangin = new KipasAngin();

// memberikan nilai pada property
$kipasangin->JumlahKipasAngin = 3;
$kipasangin->JenisKipasAngin = "Kipas duduk";
$kipasangin->TempatKipasAngin = "Di tempat sholat, di ruang Mbak Aul, dan di ruang belakang";

// mencetak hasil
echo "Jumlah kipas angin : ".$kipasangin->JumlahKipasAngin."<br>";
echo "Jenis kipas angin : ".$kipasangin->JenisKipasAngin."<br>";
echo "Tempat : ".$kipasangin->TempatKipasAngin."<br>";

?>