<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Jadwal</h1>
    <a href="jadwal/create" class="btn btn-primary mb-3">Tambah Jadwal</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Hari</th>
                <th class="text-center">Jam Buka</th>
                <th class="text-center">Jam Tutup</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody> 
            <?php $i = 1; ?>
            <?php foreach ($jadwal as $item) : ?>
                <tr>
                    <td class="text-center"><?= $i++; ?></td>
                    <td class="text-center"><?= $item['hari']; ?></td>
                    <td class="text-center"><?= $item['jam_buka']; ?></td>
                    <td class="text-center"><?= $item['jam_tutup']; ?></td>
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