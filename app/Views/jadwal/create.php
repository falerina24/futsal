<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Tambah Jadwal</h1>
    <form action="" method="post">
    <div class="form-group">
            <label for="">Hari</label>
            <select name="hari" class="form-control" required>
                <option value="">Pilih Status</option>
                <option value="senin">senin</option>
                <option value="selasa">selasa</option>
                <option value="rabu">rabu</option>
                <option value="kamis">kamis</option>
                <option value="jumat">jumat</option>
            </select>
        </div> 
        <div class="form-group">
            <label for="">Jam Buka</label>
            <input type="time" name="jam_buka" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="">Jam Tutup</label>
            <input type="time" name="jam_tutup" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/jadwal" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>