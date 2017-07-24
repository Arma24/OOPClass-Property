<?php 

// nama class
class Kasur {
 
	// property
	public $JumlahKasur;
	public $UkuranKasur;


}

$kasur = new Kasur();

// memberikan nilai pada property
$kasur->JumlahKasur = 3;
$kasur->UkuranKasur = "Sedang/Medium";

// mencetak hasil
echo "Jumlah kasur : ".$kasur->JumlahKasur."<br>";
echo "Ukuran : ".$kasur->UkuranKasur."<br>";

?>