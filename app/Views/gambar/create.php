<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Tambah Jadwal</h1>
    <form action="" method="post">
    
        <div class="form-group">
        <label for="judul">Judul:</label>
        <input type="text" name="judul" class="form-control" required>
        </div>
        <div class="form-group">
        <label for="deskripsi">Deskripsi:</label>
       
        <textarea name="deskripsi" class="form-control" required ></textarea>
        </div>
        <div class="form-group">
        <label for="">Pilih Gambar:</label>
        <input type="file" name="file_path" class="form-control"  required>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/jadwal" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<?= $this->endSection(); ?>