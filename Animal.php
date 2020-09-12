<?php

class Animal {
	public $jenis_hewan, $nama_hewan, $jumlah_kaki, $bisa_terbang, $suara;

	function cetakHewan () {
		return $this->jenis_hewan;
	}

	function jenisHewan () {
		return "Hewan Ini Adalah : ".$this ->jenis_hewan;
	}
	function namaHewan () {
		return "Hewan Ini Bernama : ".$this ->nama_hewan;
	}
	function jumlahKaki () {
		return "Jumlah Kakinya Adalah : ".$this ->jumlah_kaki;
	}
	function bisaTerbang () {
		return "Bisa Terbang : ".$this ->bisa_terbang;
	}
	function Suara () {
		return "Suaranya Adalah : ".$this ->suara;
	}
}

class Kucing extends Animal {
	public function namaHewan () {
		return "Kucing Ini Bernama Pumpkin";
	}
	public function jumlahKaki () {
		return "Kucing Ini Memiliki Jumlah Kaki Sebanyak 4";
	}
	public function bisaTerbang () {
		return "Kucing Tidak Bisa Terbang";
	}
	public function suara () {
		return "Suara Kucing : Meong meong meong";
	}
}
class Anjing extends Animal {
	public function namaHewan () {
		return "Anjing Ini Bernama Aiko";
	}
	public function jumlahKaki () {
		return "Anjing Ini Memiliki Jumlah Kaki Sebanyak 4";
	}
	public function bisaTerbang () {
		return "Anjing Tidak Bisa Terbang";
	}
	public function suara () {
		return "Suara Anjing : Guukkk guukk guukkk";
	}
}
class Elang extends Animal {
	public function namaHewan () {
		return "Elang Ini Bernama Allegra";
	}
	public function jumlahKaki () {
		return "Elang Ini Memiliki Jumlah Kaki Sebanyak 2";
	}
	public function bisaTerbang () {
		return "Elang Bisa Terbang";
	}
	public function suara () {
		return "Suara Elang : Mmiiiippppppp";
	}
}
class Angsa extends Animal {
	public function namaHewan () {
		return "Angsa Ini Bernama Amber";
	}
	public function jumlahKaki () {
		return "Angsa Ini Memiliki Jumlah Kaki Sebanyak 2";
	}
	public function bisaTerbang () {
		return "Angsa Bisa Terbang";
	}
	public function suara () {
		return "Suara Angsa : Kwwwaaaaakkkkkkkk";
	}
}


$kucing = new Kucing;
$kucing->jenis_hewan = "Kucing";
$kucing->nama_hewan = "Pumpkin";
$kucing->jumlah_kaki = "4";
$kucing->bisa_terbang = "Tidak";
$kucing->suara = "Meong meong meong";

echo $kucing->jenisHewan();
echo "<br>";
echo $kucing->namaHewan();
echo "<br>";
echo $kucing->jumlahKaki();
echo "<br>";
echo $kucing->bisaTerbang();
echo "<br>";
echo $kucing->Suara();
echo "<br>";

echo "<hr>";

$anjing = new Anjing;
$anjing->jenis_hewan = "Anjing";
$anjing->nama_hewan = "Aiko";
$anjing->jumlah_kaki = "4";
$anjing->bisa_terbang = "Tidak";
$anjing->suara = "Guukkk guukk guukkk";

echo $anjing->jenisHewan();
echo "<br>";
echo $anjing->namaHewan();
echo "<br>";
echo $anjing->jumlahKaki();
echo "<br>";
echo $anjing->bisaTerbang();
echo "<br>";
echo $anjing->Suara();
echo "<br>";

echo "<hr>";

$elang = new Elang;
$elang->jenis_hewan = "Elang";
$elang->nama_hewan = "Allegra";
$elang->jumlah_kaki = "2";
$elang->bisa_terbang = "Bisa Terbang";
$elang->suara = "Mmiiiippppppp";

echo $elang->jenisHewan();
echo "<br>";
echo $elang->namaHewan();
echo "<br>";
echo $elang->jumlahKaki();
echo "<br>";
echo $elang->bisaTerbang();
echo "<br>";
echo $elang->Suara();
echo "<br>";

echo "<hr>";

$angsa = new Angsa;
$angsa->jenis_hewan = "Angsa";
$angsa->nama_hewan = "Amber";
$angsa->jumlah_kaki = "2";
$angsa->bisa_terbang = "Bisa Terbang";
$angsa->suara = "Kwwwaaaaakkkkkkkk";

echo $angsa->jenisHewan();
echo "<br>";
echo $angsa->namaHewan();
echo "<br>";
echo $angsa->jumlahKaki();
echo "<br>";
echo $angsa->bisaTerbang();
echo "<br>";
echo $angsa->Suara();
echo "<br>";

echo "<hr>";