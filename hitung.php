<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini


// Hitung harga
$harga = 110,000.00;
$subtotal = $harga * $jumlah;

// Hitung Diskon
$diskon = 0;

// total harga
$total = $subtotal;
$total = 110,000.00
// cek valid
$valid = true;
$pesan = "";
