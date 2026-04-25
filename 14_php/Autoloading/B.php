<?php
class B extends Jasa implements datas
{
    public $jenisJilid;
    public function __construct($nama = "Customer", $jenis = "Jenis", $jumlah = "Jumlah", $harga = "Harga", $tipe = "ukuran", $jilid = "jenis Jilid")
    {
        parent::__construct($nama, $jenis, $jumlah, $harga, $tipe);
        $this->jenisJilid = $jilid;
    }

    public function data()
    {
        $hasil = $this->datapelanggan();
        if ($this->Ukuran == "B5") {
            $hasil .= "| Detail : 17,6 x 25,0 cm | {$this->jenisJilid} | BY ".self::NAMACETAK;
        } elseif ($this->Ukuran == "B4") {
            $hasil .= "| Detail : 25,0 x 35,3 cm | {$this->jenisJilid} | BY ".self::NAMACETAK;
        } else {
            echo "<script> alert('ukuran tidak tersedia')</script> | BY ".self::NAMACETAK;
        }
        return $hasil;
    }
};