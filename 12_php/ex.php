<?php

// Abstract class = kelas yang TIDAK BISA langsung dibuat objeknya
abstract class Hewan
{
    public $nama;
    
    public function __construct($nama)
    {
        $this->nama = $nama;
    }
    
    // Abstract method = WAJIB diisi oleh class anak
    abstract public function bersuara();
    
    // Non-abstract method = BISA langsung dipakai atau di-override
    public function getNama()
    {
        return $this->nama;
    }
}

// ✅ BENAR: Class anak mengimplementasikan abstract method
class Kucing extends Hewan
{
    public function bersuara()
    {
        return "Meow!";
    }
}

class Anjing extends Hewan
{
    public function bersuara()
    {
        return "Guk Guk!";
    }
}

// ❌ ERROR: Tidak bisa buat objek dari abstract class
// $hewan = new Hewan("Hewan");  // Fatal error!

// ✅ BISA: Buat objek dari class anak
$kucing = new Kucing("Tom");
$anjing = new Anjing("Spike");

echo $kucing->bersuara(); // Meow!
echo $anjing->bersuara(); // Guk Guk!

