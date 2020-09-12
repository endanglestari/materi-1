<?php

echo "Animal <br>";
echo " <hr>";

class Kucing {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$kucing = new Kucing;
$kucing->nama = "Pumkin";
$kucing->jumlah_kaki = "4";
$kucing->bisa_terbang = "Tidak";
$kucing->suara = "Meong meong meong";

echo "Kucing <br>";
echo "Nama Kucing : $kucing->nama <br>";
echo "Jumlah kakinya ada : $kucing->jumlah_kaki <br>";
echo "Apakah bisa terbang : $kucing->bisa_terbang <br>";
echo "Suaranya : $kucing->suara <br>";
echo "<hr>";

class Anjing {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$anjing = new Anjing;
$anjing->nama = "Aiko";
$anjing->jumlah_kaki = "4";
$anjing->bisa_terbang = "Tidak";
$anjing->suara = "Guukkk guukk guukkk";

echo "Anjing <br>";
echo "Nama Anjing : $anjing->nama <br>";
echo "Jumlah kakinya ada : $anjing->jumlah_kaki <br>";
echo "Apakah bisa terbang : $anjing->bisa_terbang <br>";
echo "Suaranya : $anjing->suara <br>";
echo "<hr>";

class Elang {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$elang = new Elang;
$elang->nama = "Allegra";
$elang->jumlah_kaki = "2";
$elang->bisa_terbang = "Bisa Terbang";
$elang->suara = "Mmiiiippppppp";

echo "Elang <br>";
echo "Nama Elang : $elang->nama <br>";
echo "Jumlah kakinya ada : $elang->jumlah_kaki <br>";
echo "Apakah bisa terbang : $elang->bisa_terbang <br>";
echo "Suaranya : $elang->suara <br>";
echo "<hr>";

class Angsa {
	public $nama, $jumlah_kaki, $bisa_terbang, $suara;
}

$angsa = new Angsa;
$angsa->nama = "Aiko";
$angsa->jumlah_kaki = "2";
$angsa->bisa_terbang = "Bisa Terbang";
$angsa->suara = "Kwwwaaaaakkkkkkkk";

echo "Angsa <br>";
echo "Nama Angsa : $angsa->nama <br>";
echo "Jumlah kakinya ada : $angsa->jumlah_kaki <br>";
echo "Apakah bisa terbang : $angsa->bisa_terbang <br>";
echo "Suaranya : $angsa->suara <br>";
echo "<hr>";