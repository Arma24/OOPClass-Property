<?php 

// nama class
class PengharumRuangan {
 
	// property
	public $MerkPengharumRuangan;
	public $JumlahPengharumRuangan;
	public $TempatPengharumRuangan;

}

$pengharumruangan = new PengharumRuangan();

// memberikan nilai pada property
$pengharumruangan->MerkPengharumRuangan = "Stella";
$pengharumruangan->JumlahPengharumRuangan = 2;
$pengharumruangan->TempatPengharumRuangan = "Di dekat AC";

// mencetak hasil
echo "Merk pengharum ruangan : ".$pengharumruangan->MerkPengharumRuangan."<br>";
echo "Jumlah : ".$pengharumruangan->JumlahPengharumRuangan."<br>";
echo "Tempat : ".$pengharumruangan->TempatPengharumRuangan."<br>";

?>