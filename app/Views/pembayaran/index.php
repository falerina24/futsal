<?= $this->extend('layout'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <h1>pembayaran</h1>
    <a href="pembayaran/create" class="btn btn-primary mb-3">Tambah pembayaran</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-center">No</th>
                <th class="text-center">Jumlah</th>
                <th class="text-center">Metode</th>
                <th class="text-center">Aksi</th>
            </tr>
        </thead>
        <tbody> 
            <?php $i = 1; ?>
            <?php foreach ($pembayaran as $item) : ?>
                <tr>
                    <td class="text-center"><?= $i++; ?></td>
                    <td class="text-center"><?= $item['jumlah']; ?></td>
                    <td class="text-center"><?= $item['metode']; ?></td>
                    <td>
                        <a href="pembayaran/edit/<?= $item['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="pembayaran/delete/<?= $item['id']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>