<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title><?= $mode==='create'?'Tambah':'Edit' ?> Mahasiswa</title></head>
<body>
<h2><?= $mode==='create'?'Tambah':'Edit' ?> Mahasiswa</h2>

<form method="post" action="<?= $mode==='create'
    ? site_url('mahasiswa/store')
    : site_url('mahasiswa/update/'.$row['nim']) ?>">

    <?php if ($mode==='create'): ?>
        <div>NIM: 
            <input type="text" name="nim" required value="<?= esc($row['nim']) ?>">
        </div>
        
    <?php else: ?>
        <div>NIM: 
            <b><?= esc($row['nim']) ?></b>
        </div>
        
    <?php endif; ?>

    <div>Nama: 
        <input type="text" name="nama" required value="<?= esc($row['nama']) ?>">
    </div>
    <div>Umur: 
        <input type="number" name="umur" required value="<?= esc($row['umur']) ?>">
    </div>

    <button type="submit"><?= $mode==='create'?'Simpan':'Update' ?></button>
    <a href="<?= site_url('mahasiswa') ?>">Batal</a>
</form>
</body>
</html>
