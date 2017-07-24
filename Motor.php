<?php 

// nama class
class Motor {
 
	// property
	public $JumlahMotor;
	public $JenisMotor;

}

$motor = new Motor();

// memberikan nilai pada property
$motor->JumlahMotor = 5;
$motor->JenisMotor = "Metic dan bebek";

// mencetak hasil
echo "Jumlah motor : ".$motor->JumlahMotor."<br>";
echo "Jenis : ".$motor->JenisMotor."<br>";

?>