<?php 

// nama class
class Joystick {
 
	// property
	public $WarnaJoystick;
	public $JumlahJoystick;

}

$joystick = new Joystick();

// memberikan nilai pada property
$joystick->WarnaJoystick = "Hitam dan Ungu";
$joystick->JumlahJoystick = 2;

// mencetak hasil
echo "Warna joystick : ".$joystick->WarnaJoystick."<br>";
echo "Jumlah : ".$joystick->JumlahJoystick."<br>";

?>