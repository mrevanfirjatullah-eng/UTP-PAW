<?php
// Jangan ubah ini!
$nama = $_POST["nama"];
$menu = $_POST["menu"];
$jumlah = (int) $_POST["jumlah"];
$kategori = $_POST["kategori"];

// Kerjakan mulai darisini


// Hitung harga
$harga = 0;
$subtotal = $harga * $jumlah;

// Hitung Diskon
$diskon = 15%;

// total harga
$total = $subtotal;

// cek valid
$valid = true;
$pesan = "";
