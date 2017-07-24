<?php 

// nama class
class BotolMinum {
 
	// property
	public $JumlahBotolMinum;
	public $TempatBotolMinum;

}

$botolminum = new BotolMinum();

// memberikan nilai pada property
$botolminum->JumlahBotolMinum = 2;
$botolminum->TempatBotolMinum = "Diatas meja";

// mencetak hasil
echo "Jumlah botol minum : ".$botolminum->JumlahBotolMinum."<br>";
echo "Tempat : ".$botolminum->TempatBotolMinum."<br>";

?>