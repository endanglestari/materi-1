<?php

class Animal {
	public $hewan, $jumlah_kaki, $bisa_terbang, $suara;

	function cetakHewan () {
		return $this->hewan;
	}

	function Hewan () {
		return "Hewan Ini Adalah : ".$this ->hewan;
	}
	function jumlahKaki () {
		return "Jumlah Kakinya Adalah : ".$this ->jumlah_kaki;
	}
	function bisaTerbang () {
		return "JBisa Terbang : ".$this ->bisa_terbang;
	}
	function Suara () {
		return "Suaranya Adalah : ".$this ->suara;
	}
}

class Kucing extends Animal {
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
$kucing->hewan = "Kucing";
$kucing->jumlah_kaki = "4";
$kucing->bisa_terbang = "Tidak";
$kucing->suara = "Meong meong meong";

echo $kucing->Hewan();
echo "<br>";
echo $kucing->jumlahKaki();
echo "<br>";
echo $kucing->bisaTerbang();
echo "<br>";
echo $kucing->Suara();
echo "<br>";

echo "<hr>";

$anjing = new Anjing;
$anjing->hewan = "Anjing";
$anjing->jumlah_kaki = "4";
$anjing->bisa_terbang = "Tidak";
$anjing->suara = "Guukkk guukk guukkk";

echo $anjing->Hewan();
echo "<br>";
echo $anjing->jumlahKaki();
echo "<br>";
echo $anjing->bisaTerbang();
echo "<br>";
echo $anjing->Suara();
echo "<br>";

echo "<hr>";

$elang = new Elang;
$elang->hewan = "Elang";
$elang->jumlah_kaki = "2";
$elang->bisa_terbang = "Bisa Terbang";
$elang->suara = "Mmiiiippppppp";

echo $elang->Hewan();
echo "<br>";
echo $elang->jumlahKaki();
echo "<br>";
echo $elang->bisaTerbang();
echo "<br>";
echo $elang->Suara();
echo "<br>";

echo "<hr>";

$angsa = new Angsa;
$angsa->hewan = "Angsa";
$angsa->jumlah_kaki = "2";
$angsa->bisa_terbang = "Bisa Terbang";
$angsa->suara = "Kwwwaaaaakkkkkkkk";

echo $angsa->Hewan();
echo "<br>";
echo $angsa->jumlahKaki();
echo "<br>";
echo $angsa->bisaTerbang();
echo "<br>";
echo $angsa->Suara();
echo "<br>";

echo "<hr>";