<?php 

// nama class
class Handphone {
 
	// property
	public $JumlahHandphone;
	public $MerkHandphone;

}

$handphone = new Handphone();

// memberikan nilai pada property
$handphone->JumlahHandphone = 4;
$handphone->MerkHandphone = "Xiaomi, Asus, Acer, Samsung";

// mencetak hasil
echo "Jumlah handphone : ".$handphone->JumlahHandphone."<br>";
echo "Merk : ".$handphone->MerkHandphone."<br>";

?>