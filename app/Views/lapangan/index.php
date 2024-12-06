<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Daftar Lapangan</h1>
    <a href="lapangan/create/" class="btn btn-primary mb-3">Tambah Lapangan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Lokasi</th>
                <th class="text-center">Kapasitas</th>
                <th class="text-center">Harga</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($lapangan as $item) : ?>
                <tr>
                    <td class="text-center"><?= $i++; ?></td>
                    <td class="text-center"><?= $item['nama']; ?></td>
                    <td class="text-center"><?= $item['lokasi']; ?></td>
                    <td class="text-center"><?= $item['kapasitas']; ?></td>
                    <td class="text-center"><?= $item['harga']; ?></td>
                    <td>
                        <a href="lapangan/edit/<?= $item['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="lapangan/delete/<?= $item['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>