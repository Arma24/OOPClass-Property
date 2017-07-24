<?php 

// nama class
class Joystick {
 
	// property
	public $warna;
	public $jumlah;

}

$joystick = new Joystick();

// memberikan nilai pada property
$joystick->warna = "Hitam dan Ungu";
$joystick->jumlah = 2;

// mencetak hasil
echo "Warna joystick : ".$joystick->warna."<br>";
echo "Jumlah : ".$joystick->jumlah."<br>";

?>