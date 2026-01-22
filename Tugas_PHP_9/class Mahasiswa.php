<?php
class Mahasiswa {
    public $nama;

    public function tampilkanNama() {
        return $this->nama;
    }
}

$mhs = new Mahasiswa();
$mhs->nama = "Bayu";
echo "Nama Mahasiswa: " . $mhs->tampilkanNama();
?>