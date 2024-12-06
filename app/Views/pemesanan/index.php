<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>Pemesanan</h1>
    <a href="pemesanan/create" class="btn btn-primary mb-3">Tambah Pemesanan</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Nama</th>
                <th class="text-center">Nomor Hp</th>
                <th class="text-center">Tanggal</th>
                <th class="text-center">Jam Mulai</th>
                <th class="text-center">Jam Selesai</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($pemesanan as $item) : ?>
                <tr>
                    <td class="text-center"><?= $i++; ?></td>
                    <td class="text-center"><?= $item['nama']; ?></td>
                    <td class="text-center"><?= $item['nomor']; ?></td>
                    <td class="text-center"><?= $item['tanggal']; ?></td>
                    <td class="text-center"><?= $item['jam_mulai']; ?></td>
                    <td class="text-center"><?= $item['jam_selesai']; ?></td>
                    <td>
                        <a href="pemesanan/edit/<?= $item['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="pemesanan/delete/<?= $item['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>