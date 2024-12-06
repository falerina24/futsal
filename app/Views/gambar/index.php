<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Gambar</h1>
    <a href="gambar/create" class="btn btn-primary mb-3">Tambah Jadwal</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Judul</th>
                <th class="text-center">Deskripsi</th>
                <th class="text-center">File</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody> 
            <?php $i = 1; ?>
            <?php foreach ($gambar as $item) : ?>
                <tr>
                    <td class="text-center"><?= $i++; ?></td>
                    <td class="text-center"><?= $item['judul']; ?></td>
                    <td class="text-center"><?= $item['deskripsi']; ?></td>
                    <td class="text-center"><img src="<?= base_url($item['file_path']); ?>" alt="<?= $item['judul']; ?>" width="100"></td>
                    <td>
                        <a href="jadwal/edit/<?= $item['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="jadwal/delete/<?= $item['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>