<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Daftar Mahasiswa</title></head>
<link rel="stylesheet" href="<?= base_url('css/style.css') ?>">
<body>
<h2>Daftar Mahasiswa</h2>

<form method="get" action="<?= site_url('mahasiswa') ?>" style="margin:10px 0;">
    <input type="text" name="q" placeholder="Cari nama…" value="<?= esc($q) ?>">
    <button type="submit">Search</button>
        <?php if ($q): ?><a href="<?= site_url('mahasiswa') ?>">Reset</a><?php endif; ?>
    <a href="<?= site_url('mahasiswa/create') ?>" style="margin-left:10px;">+ Tambah</a>
</form>

<table border="1" cellspacing="0" cellpadding="6">
    <tr>
        <th>NIM</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Aksi</th>
        <th>Delete</th>
    </tr>

    <?php if (empty($rows)): ?>
    <tr>
        <td colspan="5">Tidak ada data.</td>
    </tr>

    <?php else: foreach($rows as $r): ?>
        <tr>
            <td><?= esc($r['nim']) ?></td>
            <td><?= esc($r['nama']) ?></td>
            <td><?= esc($r['umur']) ?></td>
            <td>
                <a href="<?= site_url('mahasiswa/detail/'.$r['nim']) ?>">Detail</a> |
                <a href="<?= site_url('mahasiswa/edit/'.$r['nim']) ?>">Edit</a>
            </td>
            <td>
                <a href="<?= site_url('mahasiswa/delete/'.$r['nim']) ?>"
                    onclick="return confirm('Hapus NIM <?= esc($r['nim']) ?>?')">Delete</a>
            </td>
        </tr>
    <?php endforeach; endif; ?>
</table>

</body>
</html>
