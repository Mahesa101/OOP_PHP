<?php
class cetak
{
  public $daftarPelanggan=[];

  public function tambahpelanggan(jasa $pelanggan){
    $this->daftarPelanggan[]= $pelanggan;
  }

  public function cetaks(){
    $str ="DAFTAR PELANGGAN : <br>";

    foreach ($this->daftarPelanggan as $p){
        $str .= $p->data() ;
        $str .= "<br>";
    }
    return $str;
  }
}