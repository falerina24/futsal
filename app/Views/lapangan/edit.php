<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Edit lapangan</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Nama Lapangan</label>
            <input type="text" name="nama" class="form-control" value="<?= $lapangan['nama']; ?>" required>
        </div>
        <div class="form-group">
             <label for="">Lokasi</label>
                <input type="text" name="lokasi" class="form-control" value="<?= $lapangan['lokasi']; ?>" required>
        </div>
        <div class="form-group">
            <label for="">Kapasitas</label>
            <input type="text" name="kapasitas" class="form-control" value="<?= $lapangan['kapasitas']; ?>" required>
        </div>
        <div class="form-group">
             <label for="nomor">Harga</label>
                <input type="number" name="harga" class="form-control" value="<?= $lapangan['harga']; ?>" required>
        </div>
        <div class="form-group">
            <label for="">Pemesanan ID:</label>
            <select name="pemesanan_id" class="form-control">
                <?php foreach ($pemesanan as $item) : ?>
                    <option value="<?= $item['id'] ?>" <?= isset($lapangan['pemesanan_id']) && $lapangan['pemesanan_id'] == $item['id'] ? 'selected' : ''; ?>><?= $item['id'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
       
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/lapangan" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>