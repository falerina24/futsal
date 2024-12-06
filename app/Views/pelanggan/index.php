<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Daftar Pelanggan</h1>
    <a href="pelanggan/create/" class="btn btn-primary mb-3">Tambah Pelanggan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Nomor</th>
                <th class="text-center">Email</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pelanggan as $item) : ?>
                <tr>
                    <td class="text-center"><?= $i++; ?></td>
                    <td class="text-center"><?= $item['nama']; ?></td>
                    <td class="text-center"><?= $item['nomor']; ?></td>
                    <td class="text-center"><?= $item['email']; ?></td>
                    <td>
                        <a href="pelanggan/edit/<?= $item['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="pelanggan/delete/<?= $item['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>