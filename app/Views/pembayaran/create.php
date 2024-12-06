<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Tambah pembayaran</h1>
    <form action="" method="post">
        <div class="form-group">
            <label for="">jumlah</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">metode</label>
            <select name="metode" class="form-control" required>
                <option value="">Pilih Status</option>
                <option value="Transfer">Transfer</option>
                <option value="Tunai">Tunai</option>
            </select>
        </div> 
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/pembayaran" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>