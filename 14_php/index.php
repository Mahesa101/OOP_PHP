<?php
require_once "Autoloading/init.php";
// Ukuran A : Agus | JPG | x10 cetak | 1000/Perlembar 50% -> 500/Perlembar
$cetakA = new A("Ujang", "JPG", 10, 1000, "A4", 80,);
$cetakB = new B("Ani", "PNG", 20, 1500, "B5");

$cetakA->setDiscon(50);
$cetakA->getDiscon();
$cetakP = new cetak();
$cetakP->tambahpelanggan($cetakA);
$cetakP->tambahpelanggan($cetakB);
echo $cetakP->cetaks();
