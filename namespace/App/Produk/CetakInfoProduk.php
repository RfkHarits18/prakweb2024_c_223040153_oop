<?php
class CetakInfoProduk {
    public $daftarproduk = array();

        public function tambahProduk( produk $produk ) {
            $this->daftarProduk[] = $produk;
        }
    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach( $this->daftarProduk as $p ) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
}