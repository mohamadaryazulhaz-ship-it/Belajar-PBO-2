<?php
// Program Transaksi Sederhana

// 1. Menyiapkan variabel dengan tipe data berbeda
$namaBarang = "Kaos";
$hargaBarang = 75000;
$jumlahBeli = 3;
$member = true;
$diskon = 0;

// 2. Function untuk menghitung total harga
function hitungTotal($harga, $jumlah) {
    return $harga * $jumlah;
}

// Menghitung total belanja
$totalBelanja = hitungTotal($hargaBarang, $jumlahBeli);

// 3. Percabangan untuk menentukan diskon
if ($totalBelanja >= 200000) {
    $diskon = 0.10;
} elseif ($totalBelanja >= 100000) {
    $diskon = 0.05;
} else {
    $diskon = 0;
}

// Member mendapatkan diskon tambahan
if ($member == true) {
    $diskon = $diskon + 0.05;
}

// Menghitung potongan dan total bayar
$potongan = $totalBelanja * $diskon;
$totalBayar = $totalBelanja - $potongan;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Program Transaksi</title>
</head>
<body>

    <h1>Program Transaksi Sederhana</h1>

    <h2>Detail Transaksi</h2>

    <p>Nama Barang: <?php echo $namaBarang; ?></p>

    <p>Harga Barang:
        Rp<?php echo number_format($hargaBarang, 0, ',', '.'); ?>
    </p>

    <p>Jumlah Beli: <?php echo $jumlahBeli; ?></p>

    <p>Status Member:
        <?php echo $member ? "Ya" : "Tidak"; ?>
    </p>

    <h2>Rincian Pembelian</h2>

    <?php
    // 4. Perulangan untuk menampilkan rincian barang
    for ($i = 1; $i <= $jumlahBeli; $i++) {
        echo "Barang ke-" . $i . ": " . $namaBarang . "<br>";
    }
    ?>

    <h2>Hasil Pembayaran</h2>

    <p>Total Belanja:
        Rp<?php echo number_format($totalBelanja, 0, ',', '.'); ?>
    </p>

    <p>Diskon:
        <?php echo ($diskon * 100); ?>%
    </p>

    <p>Potongan Harga:
        Rp<?php echo number_format($potongan, 0, ',', '.'); ?>
    </p>

    <p><strong>Total Bayar:
        Rp<?php echo number_format($totalBayar, 0, ',', '.'); ?>
    </strong></p>

</body>
</html>