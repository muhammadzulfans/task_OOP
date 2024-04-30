<!-- 
    M. Zulfan Sururi
    22090169
    4D
 -->



<?php


//kelas buku
class Book {
    private $judul;
    private $tahun;
    private $jumlahHalaman;
    private $bahanMaterial;
    private $diskon;
    
    public function __construct($judul, $tahun, $bahanMaterial, $jumlahHalaman, $diskon) {
        $this->judul = $judul;
        $this->tahun = $tahun;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->bahanMaterial = $bahanMaterial;
        $this->diskon = $diskon;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function getTahun() {
        return $this->tahun;
    }

    public function getJumlahHalaman() {
        return $this->jumlahHalaman;
    }

    public function getBahanMaterial() {
        return $this->bahanMaterial;
    }

    public function getDiskon() {
        return $this->diskon;
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }


// Perkondisian    
    public function chekPrice() {
        $usiaBuku = date('Y') - $this->tahun;

        if ($usiaBuku <= 5) {
            if ($this->jumlahHalaman <= 100 ) {
                return 100000;
            } else if ($this->jumlahHalaman > 500 ) {
                return 500000;
            } else {
                return 300000;
            }
        } else if ($usiaBuku > 5 && $usiaBuku <= 10 ) {
            if ($this->jumlahHalaman <= 100 ) {
                return 50000;
            } else if ($this->jumlahHalaman > 500 ) {
                return 250000;
            } else {
                return 150000;
            }
        } else {
            return 10000;
        }
    }
}





// kelas komik dari turunan buku
class komik extends Book {
    private $isColorful ;

    private function __construct($judul, $tahun, $bahanMaterial, $jumlahHalaman, $diskon, $isColorful) {
        parent::__construct($judul, $tahun, $bahanMaterial, $jumlahHalaman, $diskon);
        $this->isColorful = $isColorful;
    }

    public static function cretekomik($judul, $tahun, $bahanMaterial, $jumlahHalaman, $diskon, $isColorful) {
        return new komik($judul, $tahun, $bahanMaterial, $jumlahHalaman, $diskon, $isColorful);
    }

    public function getisColorful() {
        return $this->isColorful;
    }
}





// Object Buku
$book = new Book("Calculus", 2024, 1000, "Kertas", 0);
echo "Judul Buku: " . $book->getJudul() . "<br>";


// Object Komik
$komik = new Komik("One Piece", 1998, 500, "Kertas", 0, true);
echo "Judul Komik: " . $komik->getJudul() . "<br>";