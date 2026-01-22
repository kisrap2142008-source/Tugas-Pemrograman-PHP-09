<?php
class Mobil {
    public $merk;

    public function infoMobil() {
        return "Merk Mobil: " . $this->merk;
    }
}

$mobil1 = new Mobil();
$mobil1->merk = "Toyota";

$mobil2 = new Mobil();
$mobil2->merk = "Honda";

echo $mobil1->infoMobil();
echo "<br>";
echo $mobil2->infoMobil();
?>
