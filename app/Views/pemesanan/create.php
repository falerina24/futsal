<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Tambah Pemesanan</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="">Nama Pemesanan</label>
            <input type="text" name="nama" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Nomor Hp</label>
            <input type="text" name="nomor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Tanggal Pemesanan</label>
            <input type="date" name="tanggal" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Jam Mulai</label>
            <input type="time" name="jam_mulai" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Jam Selesai</label>
            <input type="time" name="jam_selesai" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pembayaran_id">Pembayaran ID:</label>
            <select name="pembayaran_id" class="form-control">
                <?php foreach ($pembayaran as $item) : ?>
                    <option value="<?= $item['id'] ?>" class="form-control"><?= $item['id'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="">Jadwal ID:</label>
            <select name="jadwal_id" class="form-control">
                <?php foreach ($jadwal as $item) : ?>
                    <option value="<?= $item['id'] ?>" class="form-control"><?= $item['id'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/pemesanan" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>