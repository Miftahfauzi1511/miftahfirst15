<?php

class Produk {

    public string $kode;
    public string $nama;
    public int $harga;
    public int $stok;

    public const PAJAK = 0.11;
}

$produk = new Produk();

$produk->kode = 'P0001';
$produk->nama = 'Laptop';
$produk->harga = 10000000;
$produk->stok = 5;

$pajak = Produk::PAJAK * 100;
$total = $produk->harga + ($produk->harga * Produk::PAJAK);

echo "Produk: " . $produk->nama;
echo "<br/>";

echo "Harga: Rp" . number_format($produk->harga, 0, ',', '.');
echo "<br/>";

echo "Stok: " . $produk->stok;
echo "<br/>";

echo "Pajak: " . $pajak . "%";
echo "<br/>";

echo "Total harga setelah pajak: Rp" . number_format($total, 0, ',', '.');