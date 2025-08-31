<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Detail Mahasiswa</title></head>
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
<body>
    <h2>Detail Mahasiswa</h2>
    <p><b>NIM:</b> <?= esc($row['nim']) ?></p>
    <p><b>Nama:</b> <?= esc($row['nama']) ?></p>
    <p><b>Umur:</b> <?= esc($row['umur']) ?></p>
    <p><a href="<?= site_url('mahasiswa') ?>">← Kembali</a></p>
</body>
</html>
