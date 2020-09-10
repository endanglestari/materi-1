<?php

class Mobil {
	public $merk, $tipe, $mesin, $max_speed;

	public function cetakTipe(){
		return $this->tipe;
	}

	function kecepatanMaksimal(){
		return "Kecepatan Maksimal Dari Mobil Ini Adalah ".$this->max_speed;
	}
}


$bmw = new mobil;
$bmw->merk = "BMW";
$bmw->tipe = "320i";
$bmw->mesin = "2000cc";
$bmw->max_speed = "280/h";

echo "Tipe : ".$bmw->kecepatanMaksimal();